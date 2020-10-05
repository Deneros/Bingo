<?php
@session_start();
include_once("\controladores\Juego.php");
$juego = new Juego(); 
$juego = consultarJuegoId($_GET['id']);
  if($juego != null){
    $_SESSION['juego'] = @serialize($juego);
  }else{
    header("location: home.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="css/estilos.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>


<body background="img/fondo.jpg" onLoad="Inicializar()" >

  <!-- <header ><a href="#"> <img src="png-bingo.png" alt=""></a>
  </header> -->

    <section class ="contabla">
      <div class="table-responsive-xl">
      <table class="table table-dark">
        <tbody>
          <tr>
            <th scope="row">B</th>
            <td><button type="button" class="btn btn-outline-primary" id="1">1</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="2">2</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="3">3</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="4">4</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="5">5</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="6">6</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="7">7</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="8">8</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="9">9</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="10">10</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="11">11</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="12">12</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="13">13</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="14">14</button></td>
            <td><button type="button" class="btn btn-outline-primary" id="15">15</button></td>
          </tr>
          <tr>
            <th scope="row">I</th>
            <td><button type="button" class="btn btn-outline-danger" id="16">16</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="17">17</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="18">18</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="19">19</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="20">20</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="21">21</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="22">22</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="23">23</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="24">24</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="25">25</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="26">26</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="27">27</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="28">28</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="29">29</button></td>
            <td><button type="button" class="btn btn-outline-danger" id="30">30</button></td>
          </tr>
          <tr>
            <th scope="row">N</th>
            <td><button type="button" class="btn btn-outline-warning" id="31">31</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="32">32</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="33">33</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="34">34</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="35">35</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="36">36</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="37">37</button></td>  
            <td><button type="button" class="btn btn-outline-warning" id="38">38</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="39">39</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="40">40</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="41">41</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="42">42</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="43">43</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="44">44</button></td>
            <td><button type="button" class="btn btn-outline-warning" id="45">45</button></td>
          </tr>
          <tr>
            <th scope="row">G</th>
            <td><button type="button" class="btn btn-outline-info" id="46">46</button></td>
            <td><button type="button" class="btn btn-outline-info" id="47">47</button></td>
            <td><button type="button" class="btn btn-outline-info" id="48">48</button></td>
            <td><button type="button" class="btn btn-outline-info" id="49">49</button></td>
            <td><button type="button" class="btn btn-outline-info" id="50">50</button></td>
            <td><button type="button" class="btn btn-outline-info" id="51">51</button></td>
            <td><button type="button" class="btn btn-outline-info" id="52">52</button></td>  
            <td><button type="button" class="btn btn-outline-info" id="53">53</button></td>
            <td><button type="button" class="btn btn-outline-info" id="54">54</button></td>
            <td><button type="button" class="btn btn-outline-info" id="55">55</button></td>
            <td><button type="button" class="btn btn-outline-info" id="56">56</button></td>
            <td><button type="button" class="btn btn-outline-info" id="57">57</button></td>
            <td><button type="button" class="btn btn-outline-info" id="58">58</button></td>
            <td><button type="button" class="btn btn-outline-info" id="59">59</button></td>
            <td><button type="button" class="btn btn-outline-info" id="60">60</button></td>
          </tr>
          <tr>
            <th scope="row">O</th>
            <td><button type="button" class="btn btn-outline-success" id="61">61</button></td>
            <td><button type="button" class="btn btn-outline-success" id="62">62</button></td>
            <td><button type="button" class="btn btn-outline-success" id="63">63</button></td>
            <td><button type="button" class="btn btn-outline-success" id="64">64</button></td>
            <td><button type="button" class="btn btn-outline-success" id="65">65</button></td>
            <td><button type="button" class="btn btn-outline-success" id="66">66</button></td>
            <td><button type="button" class="btn btn-outline-success" id="67">67</button></td>  
            <td><button type="button" class="btn btn-outline-success" id="68">68</button></td>
            <td><button type="button" class="btn btn-outline-success" id="69">69</button></td>
            <td><button type="button" class="btn btn-outline-success" id="70">70</button></td>
            <td><button type="button" class="btn btn-outline-success" id="71">71</button></td>
            <td><button type="button" class="btn btn-outline-success" id="72">72</button></td>
            <td><button type="button" class="btn btn-outline-success" id="73">73</button></td>
            <td><button type="button" class="btn btn-outline-success" id="74">74</button></td>
            <td><button type="button" class="btn btn-outline-success" id="75">75</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    </section>

    <div class="row">
    <section>
    <div class="col">
    <div class ="contabla2"> 
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">B</th>
          <th scope="col">I</th>
          <th scope="col">N</th>
          <th scope="col">G</th>
          <th scope="col">O</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><button type="button" class="btn btn-secondary" id="B1">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="I1">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="N1">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="G1">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="O1">x</button></td>
        </tr>
        <tr>
          <td><button type="button" class="btn btn-secondary" id="B2">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="I2">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="N2">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="G2">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="O2">x</button></td>
        </tr>
        <tr>
          <td><button type="button" class="btn btn-secondary" id="B3">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="I3">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="N3">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="G3">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="O3">x</button></td>
        </tr>
        <tr>
          <td><button type="button" class="btn btn-secondary" id="B4">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="I4">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="N4">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="G4">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="O4">x</button></td>
        </tr>
        <tr>
          <td><button type="button" class="btn btn-secondary" id="B5">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="I5">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="N5">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="G5">x</button></td>
          <td><button type="button" class="btn btn-secondary" id="O5">x</button></td>
        </tr>
      </tbody>
    </table>
  </div> 
  </section>
  <div class="col">
</div>

    <div class="contBoleta">
      <h2>Balota sacada</h2>
      <div class="circulo" id="numeroAleatorio">
        <h1 id="numeros" class="numeroAlea">N</h1>
        <h1 id="linicial" class="lAlea">L</h1>
      </div>
      <button type="button" class="btn-danger" id="boton" >Sacar balota</button>
      <br>
      <button type="button" class="btn-danger" id="boton" >Cantar Bingo</button>
    </div>
  </div>
  </div>

<script>
  // function sacarBalota(){
  //   $.ajax({
  //     type: "POST",
  //     url:
  //   })


  // }
  
</script>


    
   

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
<script src="js/bin.js"></script>

</body>


</html>