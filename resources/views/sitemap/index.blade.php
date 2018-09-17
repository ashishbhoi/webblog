<?php
echo '<?xml version="1.0" encoding="UTF-8"?>'
?>
<?php
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'
?>
<url>
    <loc>https://www.abdevp.tk/</loc>
    <lastmod>2017-09-16T14:09:44+05:30</lastmod>
    <priority>1.00</priority>
</url>
@foreach ($posts as $post)
    <url>
        <loc>{{config('app.url')}}/posts/{{ $post->id }}</loc>
        <lastmod>{{$post->updated_at->tz('Asia/Calcutta')->toAtomString()}}</lastmod>
        <priority>0.80</priority>
    </url>
@endforeach
<?php
echo '</urlset>'
?>
