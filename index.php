<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eyoub Belkhiri - Portfolio</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Poppins', sans-serif; background: #121212; color: #e0e0e0; overflow-x: hidden; }

    /* Animations */
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes floating { 0%,100%{transform:translateY(0px);}50%{transform:translateY(-20px);} }
    @keyframes pulse { 0%,100%{scale:1;}50%{scale:1.05;} }
    @keyframes gradient { 0%{background-position:0% 50%;}50%{background-position:100% 50%;}100%{background-position:0% 50%;} }

    /* Hero */
    .hero { height:100vh; display:flex; align-items:center; justify-content:center; position:relative;
      background: linear-gradient(-45deg,#0f2027,#203a43,#2c5364,#1c1c1c); background-size:400% 400%; animation: gradient 15s ease infinite; }
    .hero::before { content:''; position:absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.6); }
    .hero-content { text-align:center; color:white; z-index:2; position:relative; animation:fadeInUp 1s ease-out; }
    .profile-img { width:200px; height:200px; border-radius:50%; border:5px solid rgba(255,255,255,0.3); margin:0 auto 30px; display:block; animation:floating 6s ease-in-out infinite; backdrop-filter:blur(10px); object-fit:cover; }
    .hero h1 { font-size:4rem; font-weight:700; margin-bottom:20px; }
    .hero p { font-size:1.5rem; margin-bottom:30px; opacity:0.9; }

    .btn-custom { background: linear-gradient(45deg,#ff6b6b,#4ecdc4); border:none; padding:15px 40px; border-radius:50px; color:white; font-weight:600; text-decoration:none; display:inline-block; margin:10px; transition:all 0.3s ease; box-shadow:0 8px 25px rgba(0,0,0,0.3); }
    .btn-custom:hover { transform:translateY(-3px); box-shadow:0 12px 35px rgba(0,0,0,0.5); color:white; animation:pulse 1s infinite; }

    /* Sections */
    section { padding:80px 0; position:relative; }
    .section-dark { background:#1c1c1c; }
    .section-darker { background:#181818; }

    .section-title { text-align:center; margin-bottom:60px; position:relative; }
    .section-title h2 { font-size:3rem; font-weight:700; color:#fff; margin-bottom:20px; }
    .section-title::after { content:''; position:absolute; bottom:-10px; left:50%; transform:translateX(-50%); width:80px; height:4px; background:linear-gradient(45deg,#ff6b6b,#4ecdc4); border-radius:2px; }

    /* About */
    .about-text { flex:1; font-size:1.1rem; line-height:1.8; color:#bbb; }
    .skills { display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:20px; margin-top:40px; }
    .skill-item { background:rgba(255,255,255,0.05); padding:30px; border-radius:15px; text-align:center; box-shadow:0 10px 30px rgba(0,0,0,0.4); transition:all 0.3s ease; border:1px solid rgba(255,255,255,0.1); }
    .skill-item:hover { transform:translateY(-10px); box-shadow:0 20px 40px rgba(0,0,0,0.6); }
    .skill-item i { font-size:3rem; color:#4ecdc4; margin-bottom:20px; }
    .skill-item h4 { color:#fff; margin-bottom:10px; }

    /* CV */
    .cv-section { text-align:center; background:#181818; color:white; }
    .cv-card { background:rgba(255,255,255,0.05); backdrop-filter:blur(10px); border-radius:20px; padding:50px; margin:0 auto; max-width:600px; border:1px solid rgba(255,255,255,0.1); }
    .cv-icon { font-size:4rem; margin-bottom:30px; animation:floating 4s ease-in-out infinite; }

    /* Contact */
    .contact-section { background:#121212; color:white; }
    .contact-info { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px; }
    .contact-item { text-align:center; padding:30px; border-radius:15px; background:rgba(255,255,255,0.05); backdrop-filter:blur(10px); transition:all 0.3s ease; }
    .contact-item:hover { transform:translateY(-5px); background:rgba(255,255,255,0.1); }
    .contact-item i { font-size:2.5rem; color:#4ecdc4; margin-bottom:20px; }

    /* Navbar */
    .navbar-custom { background:rgba(0,0,0,0.95); backdrop-filter:blur(10px); transition:all 0.3s ease; position:fixed; top:0; width:100%; z-index:1000; }
    .navbar-brand { font-weight:700; color:white !important; font-size:1.5rem; }
    .navbar-nav .nav-link { color:white !important; margin:0 15px; font-weight:500; }
    .navbar-nav .nav-link:hover { color:#4ecdc4 !important; }

    /* Projects Section (style du 2ème code adapté) */
    .projects-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(350px,1fr)); gap:30px; }
    .project-card { background:rgba(255,255,255,0.05); border-radius:20px; overflow:hidden; box-shadow:0 15px 35px rgba(0,0,0,0.4); transition:all 0.3s ease; border:1px solid rgba(255,255,255,0.1); }
    .project-card:hover { transform:translateY(-10px); box-shadow:0 25px 50px rgba(0,0,0,0.6); }
    .project-img { width:100%; height:250px; background:linear-gradient(45deg,#667eea,#764ba2); display:flex; align-items:center; justify-content:center; color:white; font-size:3rem; }
    .project-content { padding:30px; }
    .project-content h4 { color:#fff; margin-bottom:15px; font-size:1.5rem; }
    .project-content p { color:#bbb; line-height:1.6; margin-bottom:20px; }
    .project-tags { display:flex; flex-wrap:wrap; gap:10px; margin-bottom:20px; }
    .tag { background:linear-gradient(45deg,#ff6b6b,#4ecdc4); color:white; padding:5px 15px; border-radius:20px; font-size:0.9rem; font-weight:500; }
    .btn-project { background:transparent; border:2px solid #4ecdc4; color:#4ecdc4; padding:10px 25px; border-radius:25px; text-decoration:none; display:inline-block; margin-right:10px; transition:all 0.3s ease; }
    .btn-project:hover { background:#4ecdc4; color:white; transform:translateY(-2px); }

    /* Responsive */
    @media (max-width:768px) {
      .hero h1 { font-size:2.5rem; }
      .hero p { font-size:1.2rem; }
      .about-content { flex-direction:column; }
      .section-title h2 { font-size:2rem; }
    }

    /* Scroll animations */
    .fade-in { opacity:0; transform:translateY(30px); transition:all 0.8s ease; }
    .fade-in.visible { opacity:1; transform:translateY(0); }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#hero">Eyoub Belkhiri</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#hero">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
          <li class="nav-item"><a class="nav-link" href="#cv">CV</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projets</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="hero" class="hero">
    <div class="container">
      <div class="hero-content">
        <img src="https://i.natgeofe.com/k/093c14b4-978e-41f7-b1aa-3aff5d1c608a/gray-wolf-closeup_3x4.jpg" 
             alt="Eyoub Belkhiri" class="profile-img">
        <h1>Eyoub Belkhiri</h1>
        <p>Étudiant en BTS SIO SLAM</p>
        <a href="#about" class="btn-custom">Découvrir mon profil</a>
        <a href="#cv" class="btn-custom">Télécharger CV</a>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="section-dark">
    <div class="container">
      <div class="section-title fade-in">
        <h2>À propos de moi</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 fade-in">
          <div class="about-text">
            <h3 style="color:#fff;margin-bottom:20px;">Passionné par le développement</h3>
            <p>Bonjour ! Je suis Eyoub Belkhiri, étudiant en BTS SIO option SLAM (Solutions Logicielles et Applications Métiers). Passionné par l'informatique et le développement, je me spécialise dans la création d'applications web et mobiles modernes.</p>
            <p>Mon parcours m'a permis d'acquérir des compétences solides en programmation et en gestion de projet. J'aime relever les défis techniques et créer des solutions innovantes qui répondent aux besoins des utilisateurs.</p>
          </div>
        </div>
        <div class="col-lg-6 fade-in">
          <div class="skills">
            <div class="skill-item"><i class="fab fa-html5"></i><h4>HTML/CSS</h4><p>Front-end</p></div>
            <div class="skill-item"><i class="fab fa-js-square"></i><h4>JavaScript</h4><p>Dynamique</p></div>
            <div class="skill-item"><i class="fab fa-php"></i><h4>PHP</h4><p>Back-end</p></div>
            <div class="skill-item"><i class="fas fa-database"></i><h4>Base de données</h4><p>MySQL, PostgreSQL</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CV -->
  <section id="cv" class="cv-section">
    <div class="container">
      <div class="section-title fade-in">
        <h2>Mon CV</h2>
      </div>
      <div class="cv-card fade-in">
        <div class="cv-icon"><i class="fas fa-file-download"></i></div>
        <h3>Télécharger mon CV</h3>
        <p>Découvrez mon parcours et mes compétences.</p>
        <a href="assets/CV stage.pdf" class="btn-custom" download>
          <i class="fas fa-download"></i> Télécharger PDF
        </a>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section-darker">
    <div class="container">s
      <div class="section-title fade-in">
        <h2>Mes Projets</h2>
      </div>
      <div class="projects-grid fade-in">
        <div class="project-card">
          <div class="project-img"><i class="fas fa-futbol"></i></div>
          <div class="project-content">
            <h4>Site Ligue 1</h4>
            <p>Un projet complet avec classement, journée et plein d'autre fonctionalitées.</p>
            <div class="project-tags">
              <span class="tag">HTML</span>
              <span class="tag">CSS</span>
              <span class="tag">PHP</span>
              <span class="tag">MYSQL</span>
            </div>
            <a href="#" class="btn-project">Voir le code</a>
            <a href="#" class="btn-project">Documentation</a>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img"><i class="fas fa-futbol"></i></div>
          <div class="project-content">
            <h4>Application de Gestion</h4>
            <p>Application web pour gérer les tâches et projets avec interface intuitive.</p>
            <div class="project-tags">
              <span class="tag">Laravel</span>
              <span class="tag">Vue.js</span>
              <span class="tag">MySQL</span>
              <span class="tag">API REST</span>
            </div>
            <a href="#" class="btn-project">Voir le code</a>
            <a href="#" class="btn-project">Documentation</a>
          </div>
        </div>
        <div class="project-card">
          <div class="project-img"><i class="fas fa-mobile-alt"></i></div>
          <div class="project-content">
            <h4>Application Mobile</h4>
            <p>Application mobile cross-platform pour la gestion de données avec synchronisation cloud.</p>
            <div class="project-tags">
              <span class="tag">React Native</span>
              <span class="tag">Node.js</span>
              <span class="tag">MongoDB</span>
              <span class="tag">Firebase</span>
            </div>
            <a href="#" class="btn-project">Voir le code</a>
            <a href="#" class="btn-project">Documentation</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="section-title fade-in"><h2>Me Contacter</h2></div>
      <div class="contact-info">
        <div class="contact-item fade-in"><i class="fas fa-envelope"></i><h4>Email</h4><p>eyoubbelkhiri@email.com</p></div>
        <div class="contact-item fade-in"><i class="fab fa-linkedin"></i><h4>LinkedIn</h4><p>linkedin.com/in/eyoub-belkhiri</p></div>
        <div class="contact-item fade-in"><i class="fas fa-phone"></i><h4>Téléphone</h4><p>+33 7 67 45 93 37</p></div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script>
    function handleScrollAnimations() {
      document.querySelectorAll('.fade-in').forEach(el=>{
        const top=el.getBoundingClientRect().top;
        if(top < window.innerHeight-150){ el.classList.add('visible'); }
      });
    }
    document.addEventListener('DOMContentLoaded',()=>{
      handleScrollAnimations();
      window.addEventListener('scroll',handleScrollAnimations);
    });
  </script>
</body>
</html>
