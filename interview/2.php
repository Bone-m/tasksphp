<?php

/**
 * Задача:
 * найти недочеты (логические, стилистические), не оптимальный код и т.д.
 *
 * Ниже пример контроллера на Laravel/Lumen
 */

namespace App\Http\Controllers;

use App\Models\{Tag, Article};
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller {
    public function updateAndSyncTags(Request $request, $articleId)
    {
        $user = $request->user();
        $this::authorize('article.update', $articleId);

        /** @var Article $article */
        $article = app(ArticleRepository::class)->find($articleId);

        $fieldsToUpdate = $request->all();
        $article->update($fieldsToUpdate + ['updated_at' => Carbon::now()]);

        $tags = $request->input('tags');
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate($tagName);

            $success = app(ArticleRepository::class)->addTag($article, $tag);
            if (! $success) {
                Log::error("Can't add tag[$tag->id] for article[$article->id]");
            }
        }

        return response()->json(['success' => true,]);
    }
}