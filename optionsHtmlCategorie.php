<?php
          $conn = OpenCon();
         $sql = "SELECT id,nom FROM categories";
         $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) { ?>
          <option value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
          <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();
      ?>