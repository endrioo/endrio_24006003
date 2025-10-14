<?php
    include ('../header.php');
    include ('../menu.php');
?>
<div class="container">
    <div class="main">
        <form method="get" action="index.php" id="form" enctype="multipart/form-data">
            <h2>Create and Implement Get and Post Form Methods</h2><hr>
            <label>Name :</label>
            <input type="text" name="fnama" id="fnama" required/>

            <label>ID :</label>
            <input type="text" name="fNim" id="fNim" required/>

            <label>Study Program :</label>
            <select name="programstudi" id="fprogramstudi" required>
                <option selected>Computer Science</option>
                <option>Information Systems</option>
            </select>

            <label>Address :</label>
            <input type="text" name="falamat" id="falamat" required/>

            <label>Upload Photos:</label>
            <input type="file" name="ffoto" id="ffoto" required/>

            <label>Choose Method :</label>
            <span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span><input type="radio" name="method" value="post"> POST </span>

            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
        <?php include "process.php";?>
    </div>
</div>
<hr>
<?php
    include ('../footer.php');
?>