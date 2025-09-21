<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Olvidé mi contraseña')" :description="__('Ingresa tu correo para recibir un enlace de restablecimiento de contraseña')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input wire:model="email" :label="__('Correo electrónico')" type="email" required autofocus
            placeholder="correo@ejemplo.com" />

        <flux:button variant="primary" type="submit" class="w-full">{{ __('Enviar enlace de restablecimiento') }}
        </flux:button>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
        <span>{{ __('O bien, regresa a') }}</span>
        <flux:link :href="route('login')" wire:navigate>{{ __('iniciar sesión') }}</flux:link>
    </div>
</div>
