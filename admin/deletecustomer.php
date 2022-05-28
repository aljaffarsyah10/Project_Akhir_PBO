<script type="text/javascript">

  function confirmbox(){
    if(confirm("Are you sure to delete?")==true){
      <?php
        try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "praktikum";

          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $slot = $_GET["slot"];

          // sql to delete a record
          $sql = "DELETE FROM meetings WHERE slot=$slot";

          // use exec() because no results are returned
          $conn->exec($sql);
          // echo "Record deleted successfully";
      ?>
            alert('Record deleted successfully');
      <?php
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
      ?>
    } else {
      alert('Delete canceled');
    }
    window.location='customer.php';
  }
  
  confirmbox();
</script>