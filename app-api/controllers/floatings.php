<?php
if (is_file("../config/DBClass.php")) {
  require_once("../config/DBClass.php");
} else {

  require_once("../../config/DBClass.php");
}

class Floatings extends DBClass
{
  private $table = "floating";

  private $id;
  private $title;
  private $type = "url";
  private $background_color;
  private $background_color_dark;
  private $icon_color;
  private $icon_color_dark;
  private $icon;
  private $url;
  private $status;

  function setParams($data_array = null, $data_files = null)
  {
    if (isset($data_array) && is_array($data_array)) {
      if (isset($data_array['id']))
        $this->id = $data_array['id'];
      if (isset($data_array['title']))
        $this->title = $data_array['title'];
      if (isset($data_array['type']))
        $this->type = $data_array['type'];
      if (isset($data_array['url']))
        $this->url = $data_array['url'];
      if (isset($data_array['background_color']))
        $this->background_color = $data_array['background_color'];
      if (isset($data_array['background_color_dark']))
        $this->background_color_dark = $data_array['background_color_dark'];
      if (isset($data_array['icon_color']))
        $this->icon_color = $data_array['icon_color'];
      if (isset($data_array['icon_color_dark']))
        $this->icon_color_dark = $data_array['icon_color_dark'];
      if (isset($data_array['status'])) {
        $this->status = $data_array['status'] == "on";
      } else {
        $this->status = 0;
      }
    }


    if (isset($data_files) && is_array($data_files)) {
      if (isset($data_files['image']))
        $this->icon = $data_files['image'];
    }
  }


  function getLast()
  {
    $path = str_replace("controllers", "", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));

    $res = array();
    $result =  $this->getAllQuery("SELECT * FROM $this->table ORDER BY id desc limit 5");
    while ($m = $result->fetch_array(MYSQLI_ASSOC)) {
      $m["icon_url"] = "{$path}images/floating/{$m['icon']}";
      $res[] = $m;
    }

    return $res;
  }


  function getAllQuery($req)
  {
    return $this->query($req);
  }


  function getAll()
  {

    $path = str_replace("controllers", "", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));

    $res = array();
    $result =  $this->getAllQuery("SELECT * FROM $this->table");
    while ($m = $result->fetch_array(MYSQLI_ASSOC)) {
      $m["icon_url"] = "{$path}images/floating/{$m['icon']}";
      $res[] = $m;
    }

    return $res;
  }


  function getAllEnable()
  {
    $path = str_replace("controllers", "", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));

    $res = array();
    $result =  $this->getAllQuery("SELECT * FROM $this->table WHERE status=1");
    while ($s = $result->fetch_array(MYSQLI_ASSOC)) {
      $s["icon_url"] = "{$path}images/floating/{$s['icon']}";
      $s["translation"] = $this->getTranslationByLang($s["id"]);
      $res[] = $s;
    }

    return $res;
  }

  function getById($id)
  {
    $this->id = $id;
    $sql = "SELECT * FROM $this->table WHERE id='$this->id'";
    return $this->fetchArray($this->query($sql));
  }

  function insert()
  {

    $erreur = "";


    if ($erreur == "") {

      $max = $this->fetchRow($this->query("SELECT max(id) as max FROM $this->table"));
      $id = $max[0] + 1;
      $image = "default.png";

      if (isset($this->icon) && substr($_FILES['image']['type'], 0, 5) == "image") {
        $image = "floating_item_" . $id . ".png";
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/floating/floating_item_" . $id . ".png");
      }
      $sql = "INSERT INTO $this->table (id,title,type, icon,url, background_color, background_color_dark,icon_color,icon_color_dark,status) 
      VALUES 
      ('$id','$this->title','$this->type','$image','$this->url','$this->background_color','$this->background_color_dark','$this->icon_color','$this->icon_color_dark',$this->status)";

      try {
        $this->query($sql);
        $_SESSION['success'] = "<b>DONE!! </b> The new floating has been added.";
        echo '<script> window.location.href = "index.php?page=floating&success"; </script>';
      } catch (Exception $e) {
        $_SESSION['error'] = "Floating not add";
      }
    }
  }

  function update()
  {
    $erreur = "";
    if ($erreur == "") {
      $image = "floating_item_" . $this->id . ".png";
      if (isset($this->icon) && substr($_FILES['image']['type'], 0, 5) == "image") {
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/floating/floating_item_" . $this->id . ".png");
      }
      $sql = "UPDATE $this->table SET title = '$this->title', type= '$this->type', icon= '$image',url= '$this->url' ,background_color = '$this->background_color' ,background_color_dark = '$this->background_color_dark' ,icon_color = '$this->icon_color', icon_color_dark = '$this->icon_color_dark', status= '$this->status'  WHERE id='$this->id'";
      try {
        $this->query($sql);
        $_SESSION['success'] = "<b>DONE!! </b> The floating has been updated.";
        echo '<script> window.location.href = "index.php?page=floating&success"; </script>';
      } catch (Exception $e) {
        $_SESSION['error'] = "Floating not updated";
      }
    }
  }

  function delete()
  {
    $sql = "DELETE FROM $this->table WHERE id='$this->id'";
    try {
      $this->query($sql);
      $_SESSION['success'] = "<b>DELETED!! </b> The floating has been deleted.";
    } catch (Exception $e) {
      $_SESSION['error'] = " Floating not deleted";
    }
  }
 
  function getByLang($lang)
  {
    $sql = "SELECT * FROM `floating_translations` WHERE lang='$lang' and floating_id='" . $_REQUEST['id'] . "'";
    return $this->fetchArray($this->query($sql));
  }

  function updateTranslation()
  {
    $erreur = "";
    if ($erreur == "") {
      $sql = "UPDATE `floating_translations` SET `title` = '$this->title', `url` = '$this->url' , updated_at = now() WHERE lang='" . $_REQUEST['lang'] . "' and floating_id='" . $_REQUEST['id'] . "'   ";
      try {
        if ($this->query($sql)) {
          if ($this->affected_rows() == 0) {
            $sql_ = "INSERT INTO `floating_translations` ( `floating_id`, `title`, `url`, `lang`  ) VALUES ( '" . $_REQUEST['id'] . "', '$this->title', '$this->url', '" . $_REQUEST['lang'] . "') ";
            $this->query($sql_);
          }
        }
        $_SESSION['success'] = "<b>DONE!! </b> The tab has been updated.";
        echo '<script> window.location.href = "index.php?page=floating_edit&id=' . $this->id . '&lang=' . $_REQUEST['lang'] . '&success"; </script>';
      } catch (Exception $e) {
        $_SESSION['error'] = " Tab not updated";
      }
    }
  }

  function getTranslationByLang($floating_id)
  {
    $res = array();
    $result =  $this->getAllQuery("SELECT * FROM `floating_translations`  WHERE floating_id='$floating_id'");
    while ($m = $result->fetch_array(MYSQLI_ASSOC)) {
      $res[] = $m;
    }
    return $res;
  }
}
