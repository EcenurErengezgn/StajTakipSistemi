-- yorum satırı
SELECT * FROM bolum;
SELECT * FROM kullanici;
SELECT adi,soyadi,sifre FROM kullanici;
SELECT DISTINCT sifre FROM kullanici; 
SELECT * FROM stajbilgileri WHERE cdyolu='exe.';
SELECT * FROM stajbilgileri WHERE stajdurumu=1;
SELECT * FROM mufredatdurumu WHERE bolum_id=1 AND toplamgun=50;
SELECT adi FROM mufredatdurumu WHERE bolum_id=2 OR toplamgun=50;
SELECT * FROM mufredatdurumu WHERE bolum_id=1 AND ( toplamgun=50 OR adi='çap');
SELECT adi FROM kullanici WHERE  soyadi LIKE '%gezgin';
SELECT * FROM kullanici WHERE soyadi LIKE 'eren%';
SELECT * FROM kullanici WHERE soyadi LIKE '%ren%';
SELECT * FROM kullanici WHERE soyadi LIKE '_rengezgin';
SELECT * FROM kullanici WHERE soyadi LIKE 'erengezgi_';
SELECT * FROM kullanici WHERE adi LIKE '_cenu_';
SELECT * FROM kullanici WHERE adi LIKE 'e_e___';
SELECT * FROM kullanici WHERE adi LIKE 'ecenur';
SELECT * FROM kullanici ORDER BY adi;
SELECT * FROM kullanici ORDER BY unvan_id ASC;
SELECT * FROM kullanici ORDER BY tc_no DESC;
INSERT INTO firma VALUES (2,'veripark',02122569874,'istanbul anadolu yakası kadıköy meydanı','www.veripark.com.tr',02122569841,1);
SELECT * FROM firma;
INSERT INTO duyuru (idDuyuru,duyuruOncelik) VALUES (2,3);
SELECT * FROM duyuru;
UPDATE duyuru SET duyuruBaslik='mülakatgünleri', duyuruIcerik='pazartesi günleri dışında her gün 3 olucaktır.', duyuruTarih='2017-09-26', duyuruCikisTarihi='2017-05-16'
WHERE idDuyuru=2;
SELECT * FROM kullanici WHERE soyadi IN ('kartal','oğuz');
SELECT * FROM kullanici WHERE bolum_id BETWEEN 1 AND 3;
SELECT * FROM kullanici WHERE bolum_id NOT BETWEEN 1 AND 3;
SELECT * FROM kullanici WHERE ( bolum_id BETWEEN 1 AND 3) AND NOT idkullanici IN (1,2);
SELECT * FROM kullanici WHERE adi BETWEEN 'a' AND 'f';
SELECT kullaniciadi AS ad FROM kullanici ;
SELECT k.adi, b.bolumAdi FROM kullanici AS k, bolum AS b;
SELECT k.adi,b.bolumAdi FROM kullanici k INNER JOIN  bolum b ON k.bolum_id=b.idBolum;
SELECT * FROM bolum b RIGHT JOIN  kullanici k ON b.idBolum=k.bolum_id;
SELECT sb.ogrenci_id, st.stajTuruAdi FROM stajturu st LEFT JOIN stajbilgileri sb ON sb.stajturu=st.idStajTuru;
SELECT stajTuruAdi FROM stajturu UNION  SELECT stajDonemiAdi FROM stajdonemi; 
CREATE DATABASE deneme;
USE deneme;
CREATE TABLE deneme (
id int,
adi varchar(45)
);
ALTER TABLE stajturu ADD deneme int;
SELECT * FROM stajturu;
ALTER TABLE stajturu DROP COLUMN deneme;
ALTER TABLE stajturu MODIFY COLUMN deneme YEAR;
SELECT adi FROM kullanici WHERE soyadi IS NOT NULL;
SELECT soyadi FROM kullanici WHERE adi IS NULL;
ALTER TABLE stajturu ADD COLUMN fiyat int;
SELECT AVG(idStajTuru) FROM stajturu;
SELECT COUNT(idStajTuru) FROM stajturu;
SELECT COUNT(deneme) FROM stajturu;
SELECT COUNT(DISTINCT adi) FROM kullanici;
SELECT COUNT(unvan_id) FROM kullanici WHERE unvan_id=1;
SELECT adi FROM kullanici ORDER BY adi ASC LIMIT 1;
SELECT soyadi FROM kullanici ORDER BY  soyadi DESC LIMIT 1;
SELECT MAX(toplamgun) FROM stajbilgileri;
SELECT MIN(kabulgun) FROM stajbilgileri;
SELECT SUM(toplamgun) FROM mufredatdurumu;
SELECT UCASE(adi) FROM kullanici;
SELECT LCASE(adi) FROM kullanici;
SELECT LENGTH(soyadi) FROM kullanici;
SELECT MID(adi,1,3) FROM kullanici;
SELECT ROUND(idkullanici,2) FROM kullanici;
SELECT NOW() FROM kullanici;
SELECT FORMAT(idkullanici,3) FROM kullanici;
SELECT * FROM kullanici GROUP BY adi;
SELECT adi, AVG(toplamgun) FROM mufredatdurumu WHERE bolum_id=1 GROUP BY adi;
SELECT kullanici.adi, bolum.bolumAdi FROM kullanici INNER JOIN bolum ON 
kullanici.bolum_id=bolum.idBolum GROUP BY adi;
SELECT kullanici.adi, unvan.unvanAdi FROM kullanici INNER JOIN unvan ON
kullanici.unvan_id=unvan.idUnvan INNER JOIN bolum ON 
kullanici.bolum_id=bolum.idBolum GROUP BY  soyadi; 
SELECT adi,soyadi FROM kullanici GROUP BY bolum_id HAVING adi='ecenur';