<?php
$db_connection = pg_connect("host=postgres_host dbname=webapp_db user=nano");
if ($db_connection) {
    echo " koneksi ke Service DB PGSQL berhasil";
} else {
    echo "gagal konek!!";
}
?>