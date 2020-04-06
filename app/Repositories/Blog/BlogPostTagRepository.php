<?php

namespace App\Repositories\Blog;

use App\Http\Requests\MassDestroyBlogPostTagRequest;
use App\Http\Requests\StoreBlogPostTagRequest;
use App\Http\Requests\UpdateBlogPostTagRequest;
use App\Models\Blog\BlogPostTag;

class BlogPostTagRepository  implements BlogPostTagRepositoryInterface
{
    #Get

    /**
     * @param string|null $limit
     *
     * @return \Illuminate\Support\Collection|mixed
     */
    public function getAllTags(string $limit = null)
    {
        if($limit === null) {
            return BlogPostTag::orderBy('title')->get();
        }

        return BlogPostTag::orderBy('title')->orderBy('created_at', 'DESC')->get()->take((int)$limit);
    }

    /**
     * @param string|null $limit
     *
     * @return BlogPostTag[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function getAllTagsWhereHasBlogPosts(string $limit = null)
    {

        if($limit === null) {
            return BlogPostTag::whereHas('blogPosts')->get();
        }

        return BlogPostTag::whereHas('blogPosts')->get()->take((int)$limit);
    }

    /**
     * @param string $id
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function getBlogPostTagRecordById(string $id)
    {
        return BlogPostTag::whereId($id)->first();
    }

    /**
     * @param string $slug
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|mixed|object|null
     */
    public function getBlogPostTagRecordBySlug(string $slug)
    {
        return BlogPostTag::whereSlug($slug)->first();
    }

    #Check

    #List

    /**
     * @return \Illuminate\Support\Collection
     */
    public function listAllTagsByTitleAndId()
    {
        return BlogPostTag::orderBy('title')->get()->pluck('title', 'id');
    }
    #Store

    /**
     * @param StoreBlogPostTagRequest $request
     *
     * @return BlogPostTag
     */
    public function storeNewBlogPostTagRecord(StoreBlogPostTagRequest $request)
    {
        $blog_post_tag = new BlogPostTag();
        $blog_post_tag->title = $request->input('title');
        $blog_post_tag->slug = $request->input('slug');
        $blog_post_tag->save();

        return $blog_post_tag;
    }

    #Update

    /**
     * @param UpdateBlogPostTagRequest $request
     * @param string                   $id
     *
     * @return BlogPostTag|BlogPostTag[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|mixed|null
     */
    public function updateExistingBlogPostTagRecord(UpdateBlogPostTagRequest $request, string $id)
    {
        $blog_post_tag = BlogPostTag::find($id);
        $blog_post_tag->update($request->all());
        $blog_post_tag->save();

        return $blog_post_tag;
    }

    #Delete

    /**
     * @param string $blog_post_tag_id
     *
     * @return bool|mixed
     * @throws \Exception
     */
    public function destroySingleBlogPostTagRecord(string $blog_post_tag_id)
    {
        $blogPostTag = $this->getBlogPostTagRecordById($blog_post_tag_id);
        $blogPostTag->delete();

        return true;
    }

    /**
     * @param MassDestroyBlogPostTagRequest $request
     *
     * @return int
     */
    public function massDestroyBlogPostTagRecords(MassDestroyBlogPostTagRequest $request)
    {
        return BlogPostTag::whereIn('id', request('ids'))->delete();
    }
}
