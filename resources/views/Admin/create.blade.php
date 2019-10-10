@extends('../layout')
@section('title')
    Ajout de films
@endsection

@section('content')
    <div class="container">
            {{--            {!! form($form) !!}--}}

            {{--@if ($errors->any())
                @php
                var_dump($errors);
                @endphp

            @endif--}}

            @if ($errors->any())
                <div style="color:red">
                @php
                    foreach ($errors->get('field') as $error){
                    echo '<p>'.$error.'</p>';
                    }
                @endphp
                </div>
            @endif
        <div class="row">


            {!! form_start($form) !!}
            {!! form_label($form->titre) !!}
            {!! form_widget($form->titre,['attr'=>['class'=>'form-control','placeholder'=>'Titre']]) !!}
            <div style="color:red">
                {!! form_errors($form->titre) !!}
            </div>
            {!! form_label($form->auteur) !!}
            {!! form_widget($form->auteur,['attr'=>['class'=>'form-control','placeholder'=>'Auteur']]) !!}
            <div style="color:red">
                {!! form_errors($form->auteur) !!}
            </div>
            {!! form_label($form->genre) !!}
            {!! form_widget($form->genre,['attr'=>['class'=>'form-control','placeholder'=>'Genre']]) !!}
            <div style="color:red">
                {!! form_errors($form->genre) !!}
            </div>
            {!! form_label($form->annee) !!}
            {!! form_widget($form->annee,['attr'=>['class'=>'form-control','placeholder'=>'Année']]) !!}
            <div style="color:red">
                {!! form_errors($form->annee) !!}
            </div>
            {!! form_label($form->duree) !!}
            {!! form_widget($form->duree,['attr'=>['class'=>'form-control','placeholder'=>'Durée']]) !!}
            <div style="color:red">
                {!! form_errors($form->duree) !!}
            </div>
            {!! form_label($form->img) !!}
            {!! form_widget($form->img) !!}
            <div style="color:red">
                {!! form_errors($form->img) !!}
            </div>
            {!! form_label($form->synopsys) !!}
            {!! form_widget($form->synopsys) !!}
            <div style="color:red">
                {!! form_errors($form->synopsys) !!}
            </div>
            {!! form_widget($form->submit,['attr'=>['class'=>'btn btn-primary']]) !!}
            {!! form_end($form) !!}

        </div>
    </div>

@endsection
