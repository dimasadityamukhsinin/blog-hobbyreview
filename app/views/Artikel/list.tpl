{* <div class="container mb-5 wrap" id="article">
    <div class="content">
        <article class="mb-5">
            <h2>
                <a href="{php}echo BASE_URL;{/php}artikel/{$data.artikel.slug}">
                    {$data.artikel.judul}
                </a>
            </h2>
            <p class="meta">
                by
                <span>
                    {$data.artikel.nama}
                </span>
                |
                <span>
                    {$data.artikel.tanggal}
                </span>
                |
                <a href="{php}echo BASE_URL;{/php}kategori/{$data.artikel.kategori}" rel="category tag">
                    {$data.artikel.kategori}
                </a>
            </p>
            <a class="mb-5" href="#">
                <img class="float-left mr-3 lazyloaded h-auto imgPost" alt="{$data.artikel.judul}" src="{php}echo BASE_URL;{/php}assets/image/{$data.artikel.gambar}">
            </a>
            <p>
                {html_entity_decode($data.artikel.deskripsi)}
            </p>
        </article>
    </div>
    <div class="col kategori">
        <h2>Kategori</h2>
        {foreach from=$data.kategori item=data}
            <a href="{php}echo BASE_URL;{/php}kategori/{$data.kategori}">
                {$data.kategori}
            </a>
        {/foreach}
    </div>
</div> *}




<div class="container mb-5 wrapArtikel" id="article">
        <div class="content">
                <article class="mb-5">
                    <h2>
                        <a href="{php}echo BASE_URL;{/php}artikel/{$data.artikel.slug}">
                            {$data.artikel.judul}
                        </a>
                    </h2>
                    <p class="meta">
                        by
                        <span>
                            {$data.artikel.nama}
                        </span>
                        |
                        <span>
                            {$data.artikel.tanggal}
                        </span>
                        |
                        <a href="{php}echo BASE_URL;{/php}kategori/{$dat.artikel.kategori}" rel="category tag">
                            {$data.artikel.kategori}
                        </a>
                    </p>
                    <a href="#">
                        <img class="float-left mr-3 mb-1 lazyloaded h-auto imgPost" alt="{$data.artikel.judul}" src="{php}echo BASE_URL;{/php}assets/image/{$data.artikel.gambar}">
                    </a>
                    <p>
                        {html_entity_decode(substr($data.artikel.deskripsi, 0, 900))}
                    </p>
                </article>
        </div>
        <div class="d-flex flex-column kategori">
            <h2>Kategori</h2>
            {foreach from=$data.kategori item=data}
                <a href="{php}echo BASE_URL;{/php}kategori/{$data.kategori}">
                    {$data.kategori}
                </a>
            {/foreach}
        </div>
</div>