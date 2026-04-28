<h1>Halaman Produk</h1>

<form method="get" action="<?= base_url('/produk') ?>">
    <input type="text" name="keyword" placeholder="Cari produk...">
    <button type="submit">Cari</button>
</form>
<?php if (!empty($produk)): ?>
<?php foreach ($produk as $p): ?>
    <p><?= $p['nama']; ?></p>
<?php endforeach; ?>
<?php else: ?>
    <p>Produk tidak ditemukan</p>
<?php endif; ?>
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
INI HALAMAN PRODUK
<?= $this->endSection() ?>