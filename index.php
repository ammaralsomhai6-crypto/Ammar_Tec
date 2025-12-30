<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>Ammar AlSomhai</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;800&display=swap');

*{margin:0;padding:0;box-sizing:border-box;font-family:'Cairo',sans-serif;}
body{
    background: url('11.jpg') no-repeat center center fixed;
    background-size: cover;
    color:#333;
    scroll-behavior:smooth;
    padding-bottom:120px;
}

/* floating language switch */
.lang-switch-floating{
    position:fixed;
    top:20px;
    right:20px;
    z-index:999;
}
.lang-switch-floating button{
    padding:10px 20px;
    font-size:16px;
    border:none;
    border-radius:25px;
    cursor:pointer;
    background:linear-gradient(45deg,#ff9800,#ff5722);
    color:#fff;
    margin-left:10px;
    transition:.3s;
}
.lang-switch-floating button:hover{transform:scale(1.1);}

/* Logo Circle with custom decorative text */
.logo-circle{
    position:fixed;
    top:20px;
    left:20px;
    width:140px;
    height:140px;
    border-radius:50%;
    background: linear-gradient(135deg,#ff9800,#ff5722);
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    flex-direction:column;
    color:#fff;
    font-weight:bold;
    font-size:16px;
    box-shadow:0 0 25px rgba(0,0,0,0.3);
    z-index:999;
}
.logo-circle span{
    display:block;
    position:relative;
    font-size:14px;
    transform:rotate(-10deg);
}
.logo-circle i{
    font-size:32px;
    margin-top:-8px;
    color:#fff;
    text-shadow:0 0 5px #fff,0 0 10px #ff9800;
}

/* profile */
.profile{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
    margin-bottom:50px;
}
.profile img{
    width:280px; 
    height:auto;  
    border-radius:0; 
    object-fit:cover; 
    box-shadow:0 0 50px #ff9800; 
    animation:zoomIn 1.2s ease; 
    transition: transform .6s ease; 
}
.profile img:hover{
    transform: scale(1.05) rotate(2deg); 
}
@keyframes zoomIn{
    0%{transform:scale(0.5);opacity:0;}
    100%{transform:scale(1);opacity:1;}
}

.info{
    text-align:center;
    background: rgba(255,255,255,0.85);
    padding:15px 25px;
    border-radius:20px;
}
.info h1{font-size:60px; color:#ff5722;}
.info p{font-size:24px; margin:8px 0;}

/* sections with animation */
.section{
    background: rgba(249,249,249,0.85);
    margin:40px auto;
    padding:35px 30px;
    border-radius:25px;
    max-width:900px;
    box-shadow:0 0 25px rgba(0,0,0,0.1);
    transition: all 0.6s ease;
    display:flex;
    flex-direction:column;
    gap:15px;
    opacity:0;
    transform: translateY(50px);
}
.section.visible{
    opacity:1;
    transform: translateY(0);
    transition: all 1s ease;
}
.section h2{
    font-size:38px;
    color:#ff9800;
    display:flex;
    align-items:center;
    gap:15px;
}
.section h2 i{font-size:42px; animation:iconBounce 2s infinite;}
@keyframes iconBounce{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
}

/* list inside sections */
.list li{
    list-style:none;
    margin:10px 0;
    font-size:22px;
    display:flex;
    align-items:center;
    gap:12px;
    transition:.3s;
}
.list li:hover{
    color:#ff9800;
}

/* programming languages */
.lang-boxes{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:20px;
}
.lang-box{
    background:linear-gradient(135deg, #ff9800, #ff5722);
    padding:20px;
    border-radius:20px;
    width:150px;
    text-align:center;
    font-size:20px;
    color:#fff;
    box-shadow:0 0 25px rgba(255,165,0,0.5);
    transition:.4s;
}
.lang-box:hover{
    transform:translateY(-8px) scale(1.05);
    box-shadow:0 0 40px rgba(255,165,0,0.9);
}
.lang-box i{
    font-size:30px;
    margin-bottom:10px;
    display:block;
}

/* social icons row */
.social{
    display:flex;
    justify-content:center;
    gap:30px;
    margin-top:20px;
}
.social a{
    font-size:40px;
    color:#ff9800;
    transition:.4s;
}
.social a:hover{
    transform:scale(1.3) rotate(10deg);
}

/* footer */
footer{
    width:100%;
    text-align:center;
    font-size:18px;
    color:#fff;
    background: rgba(0,0,0,0.5);
    padding:10px 0;
    margin-top:40px;
}
</style>
</head>

<body>

<div class="logo-circle">
    <span>Ammar</span>
    <span>Tech</span>
    <i class="fa-solid fa-user-gear"></i>
</div>

<div class="lang-switch-floating">
    <button onclick="setLang('ar')">🇸🇦</button>
    <button onclick="setLang('en')">🇬🇧</button>
</div>

<div class="profile">
    <img src="profile.jpg" alt="Ammar AlSomhai">
    <div class="info">
        <h1 id="name">AMMAR ALSOMHAI</h1>
        <p id="age">AGE: 23</p>
        <p>📍 جزيرة سقطرى</p>
        <p>📞 777447782</p>
        <p>📧 ammaralsomhai6@gmail.com</p>
    </div>
</div>

<!-- ABOUT -->
<div class="section">
    <h2 id="aboutTitle"><i class="fa-solid fa-user"></i> نبذة عني</h2>
    <p id="aboutText">
        محلل نظم معلومات شغوف بالتقنية والتطوير انتمي الى جامعة ارخبيل سقطرى. أحب تحليل الأنظمة وتصميم المواقع الحديثة باحترافية. أركز على تقديم حلول برمجية مبتكرة وفعالة تلبي احتياجات العملاء.
    </p>
</div>

<!-- SPECIALIZATION -->
<div class="section">
    <h2 id="specTitle"><i class="fa-solid fa-briefcase"></i> التخصص والمجالات</h2>
    <ul class="list" id="specList">
        <li><i class="fa-solid fa-code"></i> تحليل وتصميم الأنظمة بدقة واحترافية، مع مراعاة جودة الأداء وواجهة المستخدم.</li>
        <li><i class="fa-solid fa-laptop-code"></i> تطوير مواقع ويب متكاملة وحديثة تلبي متطلبات العملاء وتضمن تجربة مستخدم سلسة.</li>
        <li><i class="fa-solid fa-palette"></i> تصميم واجهات UI/UX جذابة وسهلة الاستخدام، مع التركيز على التفاصيل الدقيقة والألوان المناسبة.</li>
        <li><i class="fa-solid fa-screwdriver-wrench"></i> صيانة المواقع وتحسين الأداء وحل المشاكل بسرعة واحترافية لضمان استمرارية العمل.</li>
    </ul>
</div>

<!-- PROGRAMMING LANGUAGES -->
<div class="section">
    <h2 id="progTitle"><i class="fa-solid fa-laptop-code"></i> لغات البرمجة</h2>
    <div class="lang-boxes" id="progList">
        <div class="lang-box"><i class="fab fa-html5"></i> HTML</div>
        <div class="lang-box"><i class="fab fa-css3-alt"></i> CSS</div>
        <div class="lang-box"><i class="fab fa-js"></i> JavaScript</div>
        <div class="lang-box"><i class="fab fa-php"></i> PHP</div>
        <div class="lang-box"><i class="fab fa-python"></i> Python</div>
        <div class="lang-box"><i class="fa-brands fa-microsoft"></i> C#</div>
    </div>
</div>

<!-- VISION -->
<div class="section">
    <h2 id="visionTitle"><i class="fa-solid fa-eye"></i> الرؤية</h2>
    <p id="visionText">
        أن أكون مطور أنظمة محترف يساهم في بناء حلول تقنية مبتكرة. أطمح لتقديم مشاريع تفيد المجتمع وتلبي احتياجات السوق الحديث. أعمل دائمًا على تطوير مهاراتي ومواكبة أحدث التقنيات.
    </p>
</div>

<!-- GOAL -->
<div class="section">
    <h2 id="goalTitle"><i class="fa-solid fa-bullseye"></i> الهدف</h2>
    <p id="goalText">
        تطوير مهاراتي في تحليل وتصميم الأنظمة وإنشاء مواقع احترافية. أهدف للوصول لمستوى عالمي في مجال تقنية المعلومات وتقديم خدمات موثوقة للعملاء.
    </p>
</div>

<!-- QUALITY -->
<div class="section">
    <h2 id="qualityTitle"><i class="fa-solid fa-check-double"></i> الجودة والدقة</h2>
    <p id="qualityText">
        الالتزام الكامل بالدقة والجودة العالية في تنفيذ المشاريع. احترام المواعيد وتسليم العمل بطريقة احترافية يضمن رضا العملاء وبناء سمعة قوية في السوق.
    </p>
</div>

<!-- SOCIAL CONTACT BOX -->
<div class="section">
    <h2><i class="fa-solid fa-share-nodes"></i> تواصل معنا</h2>
    <div class="social">
        <a href="https://wa.me/967777447782" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://instagram.com/l00l.ar" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="mailto:ammaralsomhai6@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        <a href="https://facebook.com/AmmarFaisal" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://t.me/Ammar_also_mail" target="_blank"><i class="fab fa-telegram"></i></a>
    </div>
</div>

<footer>
    جميع الحقوق محفوظة © ammaralsomhai6@gmail.com
</footer>

<script>
// language switch
function setLang(lang){
    if(lang==="en"){
        document.body.dir="ltr";
        document.getElementById("name").innerText="AMMAR ALSOMHAI";
        document.getElementById("aboutTitle").innerHTML='<i class="fa-solid fa-user"></i> About Me';
        document.getElementById("aboutText").innerText="Information Systems student passionate about technology and development. I love analyzing systems and designing modern websites professionally. Continuously improving my skills and providing innovative, efficient solutions for clients.";
        document.getElementById("specTitle").innerHTML='<i class="fa-solid fa-briefcase"></i> Specialization & Skills';
        document.getElementById("specList").innerHTML=`
            <li><i class="fa-solid fa-code"></i> Systems analysis and design with precision and performance focus.</li>
            <li><i class="fa-solid fa-laptop-code"></i> Full website development meeting client needs and ensuring smooth UX.</li>
            <li><i class="fa-solid fa-palette"></i> UI/UX design attractive and user-friendly, attention to details.</li>
            <li><i class="fa-solid fa-screwdriver-wrench"></i> Website maintenance and optimization, troubleshooting professionally.</li>
        `;
        document.getElementById("progTitle").innerHTML='<i class="fa-solid fa-laptop-code"></i> Programming Languages';
        document.getElementById("visionTitle").innerHTML='<i class="fa-solid fa-eye"></i> Vision';
        document.getElementById("visionText").innerText="To become a professional system developer delivering innovative solutions. Aim to provide projects benefiting society and meeting modern market needs, continuously improving technical skills.";
        document.getElementById("goalTitle").innerHTML='<i class="fa-solid fa-bullseye"></i> Goal';
        document.getElementById("goalText").innerText="Enhance my skills in system analysis, design, and professional website creation. Aim to reach a global level in IT and provide reliable services to clients.";
        document.getElementById("qualityTitle").innerHTML='<i class="fa-solid fa-check-double"></i> Quality & Accuracy';
        document.getElementById("qualityText").innerText="Full commitment to high-quality execution. Respect deadlines and deliver work professionally ensuring client satisfaction.";
    } else {
        document.body.dir="rtl";
        location.reload();
    }
}

// Scroll animation
const sections = document.querySelectorAll('.section');
window.addEventListener('scroll', ()=>{
    const triggerBottom = window.innerHeight / 5 * 4;
    sections.forEach(section=>{
        const sectionTop = section.getBoundingClientRect().top;
        if(sectionTop < triggerBottom){
            section.classList.add('visible');
        }
    });
});
</script>

</body>
</html>
