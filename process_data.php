<?php

//  echo strlen($_POST['fac_id2'])."<br>";
//  echo $_POST['fac_id2'];

if ( $_POST['submit'] == 'add_fac' ) {
    $fac_id = $_POST['fac_id'];
    $fac_name = $_POST['fac_name'];

    add_fac( $fac_id, $fac_name );

} else if ( $_POST['submit'] == 'add_subj' ) {
    $subj_id = $_POST['subj_id'];
    $subj_name = $_POST['subj_name'];
    $fac_id = $_POST['fac_id'];

    add_subj($subj_id, $subj_name, $fac_id );

}

function add_subj( string $subj_id, string $subj_name, string $fac_id ) {
    require_once( 'connect.php' );
    $StrSQL = 'INSERT INTO t_subject (sub_id,sub_name,fac_id) ';
    $StrSQL .= " VALUES ('".$subj_id."','".$subj_name."','".$fac_id."') ";
    $conn->exec( $StrSQL );

    if ( $conn ) {
        echo "<script>alert('Save Done.')</script>";
        echo "<script>window.location='index.php?menu=2.3'</script>";
    }
    $conn = null;
}

function add_fac( string $fac_id, string $fac_name ) {
    require_once( 'connect.php' );
    $StrSQL = 'INSERT INTO t_faculty (fac_id,fac_name) ';
    $StrSQL .= " VALUES ('".$fac_id."','".$fac_name."') ";
    $conn->exec( $StrSQL );

    if ( $conn ) {
        // ตรวจสอบ $conn ถ้าเป็นจริงให้ทำคำสั่งในวงเล็บ
        echo "<script>alert('Save Done.')</script>";
        // ข้อความบน alert ว่า Save Done
        echo "<script>window.location='index.php?menu=2.4'</script>";
        // กลับหน้า faculty.php
    }
    $conn = null;

}

?>