
<style>
    body {
  font-family: "Lato", sans-serif;
}

.background {
  background: url("https://images.pexels.com/photos/91224/pexels-photo-91224.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 100vh;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}
.background:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0));
}
.background h1 {
  font-size: 4rem;
  font-weight: 700;
}

.custom-input, .btn-custom {
  border: 0;
  background: transparent;
  border-bottom: 4px solid white;
  border-radius: 0;
  margin-bottom: 0;
}

.custom-input:focus {
  border-color: white;
  background: transparent;
  color: white;
}

.btn-custom {
  color: white;
  cursor: pointer;
}

.display-5 {
  font-size: 1.5rem;
}

#greeting {
  margin-top: 2rem;
  font-size: 2rem;
}



</style>

<!-- Due to the codepen sandboxing the form will not submit properly in this environment -->
<div class="background">
    <div class="container">
     <div class="row flex-column justify-content-center align-items-center text-center">
      <div class="col-sm-12 col-md-10 col-lg-8">      
       <h2 id="greeting">Welcome, Home.</h2>
       <h3>What would you like to inquire about today?</h3>
      </div>
     </div>
    </div>
</div>
    
