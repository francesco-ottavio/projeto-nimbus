<?php require_once("header.php");?>
    <section id="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 carrossel-img" src="photos/undraw_imagination_ok71.svg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carrossel-img" src="photos/undraw_letter_2k4m.svg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 carrossel-img" src="photos/undraw_master_plan_95wa.svg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-5">Serviços</h2>
                </div>
            </div>
            <div class="row">
                <?php listarServicos(); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="sobre">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="photos/undraw_drag_5i9w.svg" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h2>Sobre</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut officia voluptatem error mollitia?
                        Cumque inventore, exercitationem quis quaerat, voluptas porro ea eum quod harum id placeat,
                        blanditiis aut delectus ad.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Entre em contato</h2>
                    <form>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116985.45864639059!2d-46.74147901036351!3d-23.611663042868805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce579c30b637bf%3A0xb22e44f6e9496c3b!2sIdeal%20M%20%2B%20K%20Strategies!5e0!3m2!1sen!2sbr!4v1569681988484!5m2!1sen!2sbr"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php require_once("footer.php");?>