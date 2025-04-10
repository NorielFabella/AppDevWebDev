<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        section{
        width: 100vw;
        height: 100vw;
        padding: 50px
        }

        .cl_white
        {
            color: white;
        }

        img
        {
            width: 300px;
            transition: opacity 1s ease-in-out;
        }

        img:hover
        {
            opacity: .10;
        }

        .col-text
        {
            -webkit-column-count: 3;
        }

    </style>
    
</head>

<body data-spy = "scroll" data-target = ".navbar">
<nav class="navbar navbar-inverse navbar-fixed-bottom">

        <ul class = "nav navbar-nav">
            <li><a href = "#home"> Home </a></li>
            <li><a href = "#work"> What I Do </a></li>
            <li><a href = "#about"> What about Me </a></li>
            <li><a href = "#contact"> Contact Me </a></li>
        </ul>
    </nav>

    <section id = "home" style = "background: url(pic/mypic1.png); background-size: 100% 100%;" class = "cl_white text-center">
        <h1> My Portfolio </h1>
        <p class = "lead"> Welcome to my world, The life of a Programmer </p>
        <button class = "btn btn-default"> Contact Me </button>
    </section>

    <section id = "work" class = "container">
        <div class = "page-header">
            <h1 class = "text-center"> My Work</h1>
        </div>

        <div class = "text-center">
            <img src = "pic/mypic4.png" class = "img-thumbnail"/>
            <img src = "pic/mypic5.png" class = "img-thumbnail"/>
            <img src = "pic/mypic6.png" class = "img-thumbnail"/>
            <img src = "pic/mypic7.png" class = "img-thumbnail"/>
            <img src = "pic/mypic8.png" class = "img-thumbnail"/>
            <img src = "pic/mypic9.png" class = "img-thumbnail"/>
        </div>
    </section>

    <section id = "about" class = "container">
        <h2 class = "text-center"> My Skills </h2>
        <div class = "col-text"> Lorem Ipsum is simply dummy text of the printing and typesetting 
            industry. Lorem Ipsum has been the industry's standard dummy text ever 
            since the 1500s, when an unknown printer took a galley of type and scrambled 
            it to make a type specimen book. It has survived not only five centuries, but 
            also the leap into electronic typesetting, remaining essentially unchanged. It
             was popularised in the 1960s with the release of Letraset sheets containing Lorem 
             Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
             including versions of Lorem Ipsum. </div><br/>
    
             <div class = "row">
                <div class = "col-md-6">
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <h4> PHP Programmer </h4>
                        </div>
                        <div class = "panel-body">
                            <img src = "pic/mypic1.png" class = "img-circle center-block">
                            <p class = "lead text-center"> I Do PHP Programming</p>
                        </div>
                        <div class = "panel-footer"></div>
                    </div>
                </div>

                <div class = "col-md-6">
                    <div class = "panel panel-primary">
                        <div class = "panel-heading">
                            <h4> Web Designer </h4>
                        </div>
                        <div class = "panel-body">
                            <img src = "pic/mypic2.png" class = "img-circle center-block">
                            <p class = "lead text-center"> I Do CSS Bootstrap Designing</p>
                        </div>
                        <div class = "panel-footer"></div>
                    </div>
                </div>

             </div>
    
    </section>

    <section id = "contact" style = "background: silver;">
        <div class = "page-header">
            <h2 class = "text-center"> Contact Me</h2>
        </div>
        <form class = "col-md-5 col-md-offset-4">
            <div class = "form-group">
                <input class = "form-control" placeholder = "Enter Your Name" type = "text"/>
            </div>

            <div class = "form-group">
                <input class = "form-control" placeholder = "Enter Your E-mail" type = "email"/>
            </div>

            <div class = "form-group">
                <input class = "form-control" placeholder = "Subject" type = "text"/>
            </div>

            <div class = "form-group">
                <textarea class = "form-control rows-"10"> Comments</textarea>
            </div>

            <div class = "form-group">
                <input class = "btn btn-success btn-block"  type = "submit"/>
            </div>

        </form>
    </section>
    

</body>
</html>
