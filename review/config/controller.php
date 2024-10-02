<?php 

    //menampilkaan data dari DB
    function select($query)
    {
        // Panggil Database
        global $db;

        $result = mysqli_query($db, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
        }

        return $rows;
    }

    //menambahkan review
    function create_review($post)
    {
        global $db;

        $judul  = $post['judul'];
        $genre  = $post['genre'];
        $ulasan = $post['ulasan'];
        $rating = $post['rating'];

        //query tambah data
        $query = "INSERT INTO review_film VALUES(null, '$judul', CURRENT_TIMESTAMP(),'$genre', '$ulasan', '$rating')";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }

    //mengubah review
    function update_review($post)
    {
        global $db;

        $id_review = $post['id_review'];
        $judul  = $post['judul'];
        $genre  = $post['genre'];
        $ulasan = $post['ulasan'];
        $rating = $post['rating'];

        //query ubah data
        $query = "UPDATE review_film SET judul_film = '$judul', genre = '$genre', ulasan ='$ulasan', rating ='$rating' WHERE id_review = $id_review";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }

    //menghapus review
    function delete_review($id_review){
        global $db;

        //query hapus
        $query = "DELETE FROM review_film WHERE id_review = $id_review";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }


?>