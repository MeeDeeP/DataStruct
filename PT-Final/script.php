<script src="jquery-3.6.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    ?>
        <script>
            // $('#btn').on('click', function(){
                swal.fire({
                        title: "<?php echo $_SESSION['status'];?>",
                        text: "<?php echo $_SESSION['status_text'];?>",
                        icon: "<?php echo $_SESSION['status_code'];?>",
                        button: "OK",
                    });
            // })
        </script>
        <?php
        unset($_SESSION['status']);
        
    }
?>