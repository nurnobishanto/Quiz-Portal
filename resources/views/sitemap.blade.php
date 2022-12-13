<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url("/about")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/contact")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/blog")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/privacy")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/terms")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/portal")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/portal/profile")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/portal/quiz")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/portal/attempt")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/portal/result")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/portal/q-bank")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{url("/quiz")}}</loc>
        <lastmod>2022-12-11T18:25:37Z</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @foreach ($subjects as $item)
        <url>
            <loc>{{url("/subject/".$item->slug)}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($item->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
    @foreach ($ecats as $item)
        <url>
            <loc>{{url("/quiz-category/".$item->slug)}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($item->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
    @foreach ($quizzes as $item)
        <url>
            <loc>{{url("/quiz/".$item->id."/start")}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($item->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
    @foreach ($cats as $item)
        <url>
            <loc>{{url("/category/".$item->slug)}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($item->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
    @foreach ($authors as $item)
        <url>
            <loc>{{url("/author/".$item->id)}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($item->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
    @foreach ($posts as $post)
        <url>
            <loc>{{url($post->slug)}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($post->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>
