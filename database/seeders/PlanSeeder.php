<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            ['name' => 'Krypta Free', 'description' => 'Proteção essencial para começar.', 'price' => 0.00, 'features' => 'Cofre de credenciais, Senha Mestra, Criptografia básica'],
            ['name' => 'Krypta Essential', 'description' => 'Para quem precisa de organização e segurança no dia a dia.', 'price' => 10.00, 'features' => 'Cofre de credenciais, Senha Mestra, Criptografia AES-256-GCM, Autenticação multifator'],
            ['name' => 'Krypta Avançado', 'description' => 'Máxima proteção com recursos avançados.', 'price' => 15.00, 'features' => 'Tudo do Essential, Verificação de integridade, Alertas de acesso, Bloqueio remoto'],
            ['name' => 'Krypta Máximo', 'description' => 'O nível máximo de proteção e controle.', 'price' => 25.00, 'features' => 'Tudo do Avançado, Herança Digital, Recuperação de emergência, Suporte prioritário'],
            ['name' => 'Krypta Personalizado', 'description' => 'Solução sob medida para suas necessidades.', 'price' => 10.00, 'features' => 'Escolha de módulos, Definição de camadas, Personalização total'],
            ['name' => 'Krypta Família', 'description' => 'Proteção para toda a família.', 'price' => 20.00, 'features' => 'Até 5 usuários, Cofre compartilhado, Controle parental'],
            ['name' => 'Krypta Empresarial', 'description' => 'Segurança corporativa escalável.', 'price' => 50.00, 'features' => 'Usuários ilimitados, Painel administrativo, Auditoria de acessos'],
            ['name' => 'Krypta Estudante', 'description' => 'Preço acessível para estudantes.', 'price' => 5.00, 'features' => 'Cofre de credenciais, Senha Mestra, Sincronização básica'],
            ['name' => 'Krypta Premium', 'description' => 'Todos os recursos premium.', 'price' => 30.00, 'features' => 'Tudo do Máximo, Suporte 24/7, Backup em nuvem'],
            ['name' => 'Krypta Trial', 'description' => 'Teste gratuito por 30 dias.', 'price' => 0.00, 'features' => 'Acesso completo por 30 dias, Sem compromisso'],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}