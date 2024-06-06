<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
     body{
        background: #fff;
     }
     .form-area{
        padding-top: 5px;
        background: #fff;
     }
     .row.single-form{
        box-shadow: 0 2px 20px -5px rgba(0,0,0,0.5);
        background: rgb(136, 96, 138);
     }
     .left{
        background: #613659;
        padding: 210px 93px;
     }
     .left h2{
        font-family: "Nunito Sans", sans-serif;
        color: #fff;
        font-weight: 700;
        font-style: 48px;
     }
     .left h2 span{
        font-weight: 100;
     }
     .right{
        padding: 70px 100px;
        position: relative;
     }
     .right i{
        position: absolute;
        font-style: 80px;
        left: -6px;
        top: 50%;
        color: rgb(136, 96, 138);
     }
     .form-control{
        border: 1px solid #252525;
     }
     .right button{
        border: 2px solid #613659;
        border-radius: 10px;
        background: rgb(136, 96, 138);
        width: 180px;
        color: #fff;
        padding: 15px 0;
        display: inline-block;
        font-size: 16px;
        margin-top: 20px;
        cursor: pointer;
     }
     .right button:hover{
        border: 2px solid #613659;
        background: #613659;
     }
     @media (min-width: 768px) and (max-width: 991px){
        .right i{
            top: -52px;
            transform: rotate(90deg);
            left: 50%;
        }
     }
    @media (max-width: 767px){
        .left{
            padding: 90px 15px;
            text-align: center;
        }
        .left h2{
           font-size: 25px;
        }
        .right{
            padding: 25px;
        }
        .right i{
            top: -52px;
            transform: rotate(90deg);
            left: 45%;
        }
        .right button{
            width: 150px;
            padding: 12px 0
        }
    }
    </style>
  
  <body>
    <div class="form-area" id="contact">
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left">
                        <h2><span>Contact Us For</span><br>Pengunjung Soloriaw</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                        <i class="fa fa-caret-left"></i>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email Addres</label>
                                <input type="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleInputPassword1"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

