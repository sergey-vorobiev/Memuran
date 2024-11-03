<?php
class Note {
    private $conn;
    private string $table_name;
 
    private $note_id;
    private $note_title;
    private $note_content;
    private $note_date;
    private $note_filename_image;
    private $note_subtitle_image;
    private $note_id_category;

    public function __construct($db) {
        $this->conn = $db;
        $this->table_name = "mm_notes";
    }

    function getAllNotes(){
        $sQuery = "SELECT * FROM " . $this->table_name;
        $oStmt = $this->conn->prepare($sQuery);
        $oStmt->execute();
        return $oStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getNoteById($noteId) {
        $sQuery = "SELECT * FROM " . $this->table_name . " WHERE note_id = " . $noteId;
        $oStmt = $this->conn->prepare($sQuery);
        $oStmt->execute();
        $arNote = $oStmt->fetch(PDO::FETCH_ASSOC);
        return $arNote;
    }

    function getAllActiveDate(){
        $sQuery = "SELECT note_id, note_date FROM " . $this->table_name;
        $oStmt = $this->conn->prepare($sQuery);
        $oStmt->execute();
        $arActiveDate = $oStmt->fetchAll(PDO::FETCH_ASSOC);
        $arDateSave = array();

        foreach($arActiveDate as $arItem) {
            $date = $arItem["note_date"];
            if (isset($arDateSave[$date])) {
                $arDateSave[$date]['note_count'] += 1;
                $arDateSave[$date]['note_ids'][] = $arItem["note_id"];
            } else {
                $arDateSave[$date] = array(
                    'note_count' => 1,
                    'note_ids' => array($arItem["note_id"])
                );
            }
        }

        ksort($arDateSave);

        return $arDateSave;
    }

    function getNextOrPreviousNote($date, $direction) {
        $order = ($direction === 'next') ? 'ASC' : 'DESC';
        $operator = ($direction === 'next') ? '>' : '<';

        $sQuery = "SELECT * FROM " . $this->table_name . " WHERE note_date $operator :date ORDER BY note_date $order, note_id $order";
        $oStmt = $this->conn->prepare($sQuery);

        $oStmt->bindParam(':date', $date, PDO::PARAM_STR);

        $oStmt->execute();

        $arNotes = $oStmt->fetchAll(PDO::FETCH_ASSOC);

        return $arNotes;
    }

    function getNotesByDate($date) {
        $sQuery = "SELECT * FROM " . $this->table_name . " WHERE note_date = :date ORDER BY note_id ASC";
        $oStmt = $this->conn->prepare($sQuery);

        $oStmt->bindParam(':date', $date, PDO::PARAM_STR);

        $oStmt->execute();

        $arNotes = $oStmt->fetchAll(PDO::FETCH_ASSOC);

        return $arNotes;
    }
}