<?php include 'head.php';
      include 'g-admin/config.php';
    
    if (isset($_POST['submit'])) {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $state      = $_POST['state'];
        $city       = $_POST['city'];
        $address    = $_POST['address'];
        $franchise_name= $_POST['franchise_name'];
        $reason     = $_POST['reason'];
        $description= $_POST['description'];
        $other      = $_POST['other'];

    $query="INSERT into franchise_detail(
        name,email,phone,state,city,address,franchise_name,reason,description,other
    ) 
    VALUES(
        '$name',
        '$email',
        '$phone',
        '$state',
        '$city',
        '$address',
        '$franchise_name',
        '$reason',
        '$description',
        '$other'
    )";
    $run=mysqli_query($connect,$query);
    if (!$run) {
        header('location:franchise.php');
        die();
    }
/**===================================
 * SEND Mail to the Admin
 * ===================================
 */
    $to_email_address='mkt.globus@gmail.com';
    $subject="New Franchise Request";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.='From:'.$email."\r\n";
    $message="
<html>
<head>
  <title>New Franchise Request</title>
</head>
<body>
  
  <table>
    <tr>
      <td>Name:".$name."</td>
      <td>Email:".$email."</td>
    </tr>
    <tr>
      <td>Phone:".$phone."</td>
      <td>State:".$state."</td>
    </tr>
    <tr>
      <td>City:".$city."</td>
      <td>Address:".$address."</td>
    </tr>
    <tr>
      <td>Franchise Name:".$franchise_name."</td>
      <td>Reason:".$reason."</td>
    </tr>
    <tr>
      <td>Description:".$description."</td>
      <td>Other:".$other."</td>
    </tr>
    
    
  </table>
</body>
</html>
";
    
    $mail=mail($to_email_address,$subject,$message,$headers);
if ($mail) {
    echo "<script>alert('Your Request Submitted');</script>";
}
    }
?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php 
include 'navbar.php';
?>

<div class="P-laboratories" id="laboratories">
    <div class="w3l-about w3l-gallery">
        <div class="container">
            <div class="w3ls-heading">
                <h3 style="margin-top: 80px">Get the Franchise</h3>
            </div>
            <div class="col-xs-2"></div>
            <div class="col-xs-8">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form form-franchise">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="Name">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="Phone">Phone</label>
                                <input class="form-control" type="text" name="phone" placeholder="Enter Your Phone">
                            </div>
                            <div class="col-md-6">
                                <label for="State">State</label>
                                <input class="form-control" type="text" name="state" placeholder="Enter Your State">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="City">City</label>
                                <input class="form-control" type="text" name="city" placeholder="Enter Your City">
                            </div>
                            <div class="col-md-6">
                                <label for="Address">Address</label>
                                <input class="form-control" type="text" name="address" placeholder="Enter Your Address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="Franchise">Franchise</label>
                                <select name="franchise_name" class="form-control">
                                    <option value="">Select</option>
                                    <option value="AAYUSH BIOTECH">AAYUSH BIOTECH</option>
                                    <option value="CAREVEDA">CAREVEDA</option>
                                    <option value="GLAMVEDA">GLAMVEDA</option>
                                    <option value="GLOBUS HARBAL CARE">GLOBUS HARBAL CARE</option>
                                    <option value="GLOBUS HEALTHCARE">GLOBUS HEALTHCARE</option>
                                    <option value="GLOBUS Remedies LTD.">GLOBUS Remedies LTD.</option>
                                    <option value="GLOBUS VETCARE">GLOBUS VETCARE</option>
                                    <option value="ZECHSTEIN LIFE SCIENCES">ZECHSTEIN LIFE SCIENCES</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Reason">Reason you want to join us</label>
                                <input class="form-control" type="text" name="reason" placeholder="Enter Your Reason">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="Description">Description about yourself</label>
                                <input class="form-control" type="text" name="description" placeholder="Enter Your Description">
                            </div>
                            <div class="col-md-6">
                                <label for="Other">Other</label>
                                <input class="form-control" type="text" name="other" placeholder="Enter Other Remarks">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <input type="submit" name="submit" value="Submit" class="form-control btn btn-info">
                            </div>
                        </div>
                    </div>
                </form>
            <!-- Form Closes Here -->
            </div>
            <div class="col-xs-2"></div>
            <div class="clearfix"></div>
            <div class="w3ls-heading">
                <h3 style="margin-top: 80px"> Pharma Franchise Opportunity</h3>
            </div>
            <div class="gallery-grids">
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>AAYUSH BIOTECH</p>
                                <p>
                                    <a href="files/AAYUSH_BIOTECH.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>CAREVEDA</p>
                                <p>
                                    <a href="files/CAREVEDA.xlsx" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>GLAMVEDA</p>
                                <p>
                                    <a href="files/GLAMVEDA.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>GLOBUS HARBAL CARE</p>
                                <p>
                                    <a href="files/GLOBUS_HARBAL_CARE.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>GLOBUS HEALTHCARE</p>
                                <p>
                                    <a href="files/GLOBUS_HEALTHCARE.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>GLOBUS Remedies LTD.</p>
                                <p>
                                    <a href="files/GLOBUS-Remedies-LTD.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>GLOBUS VETCARE</p>
                                <p>
                                    <a href="files/GLOBUS-VETCARE.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>ZECHSTEIN LIFE SCIENCES</p>
                                <p>
                                    <a href="files/ZECHSTEIN-LIFE-SCIENCES.xls" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <script src="js/lightbox-plus-jquery.min.js"> </script>
            </div>
            <div class="w3ls-heading">
                <h3 style="margin-top: 80px">Key Documents</h3>
            </div>
            <div class="gallery-grids">
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>PARTY INFORMATION</p>
                                <p>
                                    <a href="files/PARTY-INFORMATION.doc" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 gallery-grid">
                    <div class="grid">
                        <figure class="effect-apollo"><br>
                                <p>TERM &amp; CONDITION</p>
                                <p>
                                    <a href="files/TERM&amp;CONDITION.doc" target="_blank"><button>More Info</button></a>
                                </p>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// include 'footer.php';
include 'script.php';
?>
</body>
</html>
