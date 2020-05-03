@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifier votre adresse E-Mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification a été envoyé sur votre adresse E-Mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de confirmer, vérifier le lien envoyé sur votre adresse E-Mail.') }}
                    {{ __('Si vous n'avez pas reçu le lien) }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en recevoir un nouveau.) }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
