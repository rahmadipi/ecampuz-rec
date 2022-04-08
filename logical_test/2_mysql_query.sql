SELECT a.mhs_nama AS "nama mahasiswa", c.mk_kode AS "kode matakuliah", c.mk_nama AS "nama matakuliah", b.nilai AS "nilai" FROM `tb_mahasiswa` a, `tb_mahasiswa_nilai` b, `tb_matakuliah` c WHERE a.mhs_id=b.mhs_id && b.mk_id=c.mk_id && c.mk_kode="MK303" ORDER BY b.nilai desc limit 1