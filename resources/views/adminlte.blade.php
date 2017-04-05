@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="progress progress-sm active">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>

                <h4>Matrícula</h4>

                <wizard>
                    <wizard-step title="Usuari" active="true">
                        <enrollment-form-user></enrollment-form-user>
                    </wizard-step>
                    <wizard-step title="Dades personals">
                        Step 2: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur consequuntur dicta dolorum ducimus, impedit, in incidunt ipsa itaque, maiores nulla quaerat quam quod repellendus repudiandae velit. Aliquid deleniti eos magni?
                    </wizard-step>
                    <wizard-step title="Estudis i curs">
                        Step 3: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet earum ipsum natus, quo suscipit veritatis voluptas! Delectus distinctio eligendi impedit, maxime, mollitia nesciunt quae, quo reiciendis soluta tempore vero voluptatibus!
                    </wizard-step>
                    <wizard-step title="Moduls professionals">
                        Step 4: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias facere ipsa laudantium libero necessitatibus sed, vitae voluptatem. Deleniti harum laborum laudantium maxime nam ratione rem repellat reprehenderit sit suscipit!
                    </wizard-step>
                    <wizard-step title="Unitats formatives">
                        Step 5: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor eum harum non nulla. Beatae iusto nulla, officiis perferendis porro quam unde. Eligendi, est officiis. Possimus, praesentium voluptate? Dignissimos, quisquam?
                    </wizard-step>
                </wizard>
            </div>
        </div>
    </div>
@endsection
