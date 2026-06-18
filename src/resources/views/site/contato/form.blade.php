<section class="duvidas">
    <div class="texto-duvidas">
        <h2>Fale com a Felsk <span>Barber</span></h2>
        <p>Está com alguma dúvida sobre os nossos serviços?</p>

        <p>✓ Atendimento <span>profissional</span></p>
        <p>✓ Valorização do estilo e <span>identidade</span></p>
        <p>✓ Parcerias <span>comerciais</span></p>

        <strong>➡ Preencha o formulário ao lado e retornaremos em breve</strong>
    </div>

    <form action="{{ route('duvidas.enviar') }}" method="POST" class="form-duvidas">
        @csrf

        <div class="linha">
            <input type="text" name="nome" placeholder="Nome:" required>
            <input type="email" name="email" placeholder="E-mail:" required>
        </div>

        <div class="linha">
            <input type="text" name="telefone" placeholder="Telefone:">
            <input type="text" name="assunto" placeholder="Assunto:" required>
        </div>

        <textarea name="mensagem" placeholder="Escreva sua mensagem:" required></textarea>

        <div class="botoes">
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</section>