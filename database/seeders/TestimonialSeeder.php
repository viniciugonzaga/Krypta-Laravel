<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder {
    public function run(): void {
        $data = [
            ['name' => 'Danilo Pereira', 'role' => 'Empresário', 'content' => 'Gosto da proposta de resolver os problemas de segurança digital de forma acessível. O Krypta é um excelente aliado para proteger o que importa.'],
            ['name' => 'Mariana Costa', 'role' => 'Advogada', 'content' => 'O Krypta trouxe muita mais facilidade e segurança para o meu escritório. Agora, tenho minhas senhas e documentos sensíveis totalmente seguros e na palma da mão.'],
            ['name' => 'Pedro Farias', 'role' => 'Desenvolvedor', 'content' => 'O que mais me chamou a atenção no Krypta foi a forma de armazenar minhas credenciais. Ele unifica segurança com usabilidade, o que é raro no mercado.'],
        ];
        foreach($data as $d) Testimonial::create($d);
    }
}