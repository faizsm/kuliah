SELECT a.nama_anggota, k.nama_kelompok_tani, p.nama_alat, o.tanggal_pengolahan
FROM anggota a
JOIN pengolahan o ON a.id_anggota = o.id_anggota
JOIN kelompok_tani k ON o.id_kelompok_tani = k.id_kelompok_tani
JOIN alat_pertanian p ON o.id_alat = p.id_alat;
