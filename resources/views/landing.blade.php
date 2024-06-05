<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            position: relative;
            background: url('{{ asset('images/matthardy-bg.jpg') }}') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            height: 100vh;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
            backdrop-filter: blur(1fpx); /* Adjust the blur as needed */
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .logo {
            max-width: 200px;
            margin: 0 auto 20px;
        }
        .content-section {
            padding: 60px 0;
        }
        .contact-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer .social-icons a:hover {
            color: #007bff;
        }
        .form-control, .btn {
            border-radius: 0;
        }
    </style>
</head>
<body>

    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content container">
            <img src="{{ asset('images/logo_w.svg') }}" alt="Logo" class="logo">
            <h1>Bem-vindo à Nossa Família</h1>
            <p>Conheça mais sobre nossa instituição.</p>
            <a href="#content" class="btn btn-primary">Saiba Mais</a>
        </div>
    </div>

    <div id="content" class="content-section">
        <div class="container">
            <h2>Quem Somos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Visitantes</h5>
                            <p class="card-text">Descrição do Card 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Eventos</h5>
                            <p class="card-text">Descrição do Card 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Programações</h5>
                            <p class="card-text">Descrição do Card 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contribute" class="content-section">
        <div class="container">
            <h2>Contribua</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Doe</h5>
                            <p class="card-text">Descrição do Card 4.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="contribute" class="content-section">
        <div class="container">
            <h2>Mídias</h2>
            <div class="row">
                <div class="col-md-8">
                    <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Downloads</h5>
                            <p class="card-text">Descrição do Card 5.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-section">
        <div class="container">
            <h2>Contato</h2>
            <p>Entre em contato conosco preenchendo o formulário abaixo:</p>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Seu Telefone">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Sua Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; 2024 Minha Christian Pierre. Todos os direitos reservados.</p>
            <p><a href="https://www.pexels.com/pt-br/foto/foto-de-close-up-de-corpo-d-agua-3560168/">Foto de Matt Hardy</a></p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Smooth Scroll Script -->
    <script>
        $(document).ready(function(){
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });
        });
    </script>
</body>
</html>
