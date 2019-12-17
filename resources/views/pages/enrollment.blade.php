@extends('layout.app', ['current' => 'imovel'])
@section('body')

<section class="enrollment">
    <div class="form-card-credit">
        <form action="/{{ $teste->id }}/immobiles/enrollment/thanks" method="POST" id="payment-form" class="datpayment-form">
            <div class="dpf-title">
                <div class="accepted-cards-logo"></div>
            </div>
            <div class="dpf-card-placeholder"></div>
            <div class="dpf-input-container">
                <div class="dpf-input-row">
                    <label class="dpf-input-label">Número do Cartão</label>
                    <div class="dpf-input-container with-icon">
                        <span class="dpf-input-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <input type="text" class="dpf-input" size="20" data-type="number">
                    </div>
                </div>

                <div class="dpf-input-row">
                    <div class="dpf-input-column">
                        <input type="hidden" size="2" data-type="exp_month" placeholder="MM">
                        <input type="hidden" size="2" data-type="exp_year" placeholder="YY">

                        <label class="dpf-input-label">Data de expiração</label>
                        <div class="dpf-input-container">
                            <input type="text" class="dpf-input" data-type="expiry">
                        </div>
                    </div>
                    <div class="dpf-input-column">
                        <label class="dpf-input-label">CVC</label>
                        <div class="dpf-input-container">
                            <input type="text" class="dpf-input" size="4" data-type="cvc">
                        </div>
                    </div>
                </div>

                <div class="dpf-input-row">
                    <label class="dpf-input-label">Nome completo</label>
                    <div class="dpf-input-container">
                        <input type="text" size="4" class="dpf-input" data-type="name">
                    </div>
                </div>

                <button type="submit" class="dpf-submit">
                    <span class="btn-active-state">
                        Finalizar
                    </span>
                    <span class="btn-loading-state">
                        <i class="fa fa-refresh "></i>
                    </span>
                </button>
            </div>
        </form>
    </div>

  <div class="card">
    <div class="img">
      <img src=" /storage/{{$teste->photos[0]->photo }}" alt="">
    </div>
    <div class="classificacao">
      <span>4.9</span>
    </div>
    <div class="card-corpo">
      <div class="titulo">
        <h1>{{ $teste->title }}</h1>
        <p>{{ $teste->endereco }} / {{ $teste->cidade }}</p>
      </div>
      <div class="periodo">
        <div class="sub-title">
          <i class="fas fa-history"></i>
          <h3>Períodos de Atendimento</h3>
        </div>
        <ul>
          <?php $atend = explode(",", $teste->period_atend);
          $colors = array("52C8D6", "2882c7", "281cba");
          for ($i=0; $i < count($atend); $i++) {
            echo '<li style="background: #'.$colors[$i].'">'. $atend[$i] . '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="dias">
        <div class="sub-title">
          <i class="far fa-calendar-minus"></i>
          <h3>Dias de fucionamento</h3>
        </div>
        <ul>
          <?php $dias = explode(",", $teste->days_atend);
          $colors2 = array("737674", "abadac", "737674", "abadac", "737674", "ea5455", "ea5455");

          for ($i=0; $i < count($dias); $i++) {
            if($dias[$i] == "SAB"){
              echo '<li style="background: #ea5455">'. $dias[$i] . '</li>';
            }elseif ($dias[$i] == "DOM") {
              echo '<li style="background: #ea5455">'. $dias[$i] . '</li>';
            }else{
              echo '<li style="background: #'.$colors2[$i].'">'. $dias[$i] . '</li>';
            }
          }
          ?>
        </ul>
      </div>
      <div class="valores">
        <div class="sub-title">
          <i class="fas fa-dollar-sign"></i>
          <h3>Valores</h3>
        </div>
        <ul>
          <li style="background:#52C8D6"><sub>R$</sub>{{ $teste->value_h }} <sub> ,00 </sub> / hora </li>
          <li><sub>R$</sub>{{ $teste->value_m }} <sub>,00</sub> / mês </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<script>
var payment_form = new DatPayment({
  form_selector: '#payment-form',
  card_container_selector: '.dpf-card-placeholder',

  number_selector: '.dpf-input[data-type="number"]',
  date_selector: '.dpf-input[data-type="expiry"]',
  cvc_selector: '.dpf-input[data-type="cvc"]',
  name_selector: '.dpf-input[data-type="name"]',

  submit_button_selector: '.dpf-submit',

  placeholders: {
      number: '•••• •••• •••• ••••',
      expiry: '••/••',
      cvc: '•••',
      name: 'DUPONT'
  },

  validators: {
      number: function(number){
          return Stripe.card.validateCardNumber(number);
      },
      expiry: function(expiry){
          var expiry = expiry.split(' / ');
          return Stripe.card.validateExpiry(expiry[0]||0,expiry[1]||0);
      },
      cvc: function(cvc){
          return Stripe.card.validateCVC(cvc);
      },
      name: function(value){
          return value.length > 0;
      }
  }
});

var demo_log_div = document.getElementById("demo-log");

payment_form.form.addEventListener('payment_form:submit',function(e){
  var form_data = e.detail;
  payment_form.unlockForm();
  demo_log_div.innerHTML += "<br>"+JSON.stringify(form_data);
});

payment_form.form.addEventListener('payment_form:field_validation_success',function(e){
  var input = e.detail;

  demo_log_div.innerHTML += "<br>field_validation_success:"+input.getAttribute("data-type");

});

payment_form.form.addEventListener('payment_form:field_validation_failed',function(e){
  var input = e.detail;

  demo_log_div.innerHTML += "<br>field_validation_failed:"+input.getAttribute("data-type");
});
</script>
@endsection
