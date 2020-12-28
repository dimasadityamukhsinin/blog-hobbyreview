<div class="container mb-5 wrap" id="article">
        <div class="content">
            {foreach $data.artikel as $data}
                <article class="mb-5">
                    <a class="mb-5" href="#">
                        <img class="float-left mr-3 lazyloaded h-auto imgArticle" alt="{$data.judul}" src="{php}echo BASE_URL;{/php}assets/image/{$data.gambar}">
                    </a>
                    <h2>
                        <a href="{php}echo BASE_URL;{/php}artikel/{$data.slug}">
                            {$data.judul}
                        </a>
                    </h2>
                    <p class="meta">
                        by
                        <span>
                            {$data.nama}
                        </span>
                        |
                        <span>
                            {$data.tanggal}
                        </span>
                        |
                        <a href="{php}echo BASE_URL;{/php}kategori/{$data.kategori}" rel="category tag">
                            {$data.kategori}
                        </a>
                    </p>
                    <p>
                        {html_entity_decode(substr($data.deskripsi, 0, 900))}
                        <a href="{php}echo BASE_URL;{/php}artikel/{$data.slug}">
                            <span aria-label="Lanjutkan Membaca {$data.judul}">
                                (selengkapnya…)
                            </span>
                        </a>
                    </p>
                </article>
            {/foreach}
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