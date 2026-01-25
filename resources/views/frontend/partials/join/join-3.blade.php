<style>
:root {
  --brand:#fb6701;
  --accent:#ec3911;
  --text-dark:#0f172a;
}

/* container */
.join-creative {
  position:relative;
  margin:60px 0;
  overflow:hidden;
  border-radius:20px;
  background:linear-gradient(135deg,#ffffff 0%,#f9fafc 60%,#e0edff 100%);
  box-shadow:0 12px 30px rgba(0,0,0,.1);
}

/* diagonal colored ribbon */
.join-creative::before{
  content:"";
  position:absolute;
  top:-50%;
  right:-40%;
  width:80%;
  height:200%;
  background:linear-gradient(135deg, #fb6701, #ec3911);
  transform:rotate(-20deg);
  opacity:.15;
  animation:moveGradient 6s linear infinite alternate;
}
@keyframes moveGradient {
  0%{ transform:rotate(-20deg) translateY(0); }
  100%{ transform:rotate(-20deg) translateY(30px); }
}

/* floating decorative circles */
.join-creative::after{
  content:"";
  position:absolute;
  left:20%;
  top:20%;
  width:120px; height:120px;
  background:radial-gradient(circle,rgba(0,91,255,.18),transparent 60%);
  border-radius:50%;
  animation:float 5s ease-in-out infinite alternate;
}
@keyframes float {
  from{ transform:translateY(0); }
  to{ transform:translateY(25px); }
}

/* content block */
.join-creative .content {
  position:relative;
  z-index:1;
  text-align:center;
  padding:80px 20px;
  max-width:800px;
  margin:auto;
}

/* heading */
.join-creative h2 {
  font-size:2rem;
  font-weight:900;
  color:var(--text-dark);
  margin-bottom:12px;
  background:linear-gradient(90deg, #fb6701, #ec3911);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}

/* subtext */
.join-creative p {
  color:#334155;
  font-size:1rem;
  line-height:1.7;
  margin-bottom:30px;
}

/* CTA button */
.join-creative .btn {
  display:inline-block;
  background:linear-gradient(90deg, #fb6701, #ec3911);
  color:#fff;
  padding:14px 34px;
  border-radius:40px;
  text-decoration:none;
  font-weight:800;
  font-size:1rem;
  box-shadow:0 8px 20px rgba(0,91,255,.35);
  transition:transform .25s, box-shadow .25s;
}
.join-creative .btn:hover{
  transform:translateY(-3px) scale(1.03);
  box-shadow:0 14px 30px rgba(0,91,255,.45);
}

@media(max-width:768px){
  .join-creative .content{ padding:60px 20px; }
  .join-creative h2{ font-size:1.6rem; }
}
</style>

<section class="join-creative">
  <div class="content">
    <h2>🌿 जैन पत्र पत्रिकाएं समाज व धर्म की प्रहरी हैं। संगठन में अपार शक्ति होती है।</h2>
    <p>
      भारत की सभी भाषाओं की जैन पत्र- पत्रिकाओं के संपादकों को संगठित कर उनके सर्वांगीण विकास के लिए प्रयत्न करना। ❤️
    </p>
    <a href="{{url('/user-donate')}}" class="btn">Donation💰</a>
  </div>
</section>
