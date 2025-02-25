<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blogPostCategories as $category)
        <url>
            <loc>{{config('app.url', 'http:://localhost.test')}}/blog-category/{{ $category->slug }}</loc>
            <lastmod>{{ \Carbon\Carbon::parse($category->updated_at)->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>
