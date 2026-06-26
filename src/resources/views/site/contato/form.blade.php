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

            <input
                type="text"
                name="nome_contato"
                placeholder="Nome:"
                value="{{ old('nome_contato') }}"
                required>

            <input
                type="email"
                name="email_contato"
                placeholder="E-mail:"
                value="{{ old('email_contato') }}"
                required>

        </div>

        <div class="linha">

            <input
                type="text"
                name="telefone_contato"
                placeholder="Telefone:"
                value="{{ old('telefone_contato') }}">

            <select name="assunto_contato" required>
                <option value="">Selecione um assunto</option>
                <option value="Agendamento">Agendamento</option>
                <option value="Informações">Informações</option>
                <option value="Dúvidas">Dúvidas</option>
            </select>

        </div>

        <textarea
            name="mensagem_contato"
            placeholder="Escreva sua mensagem:"
            required>{{ old('mensagem_contato') }}</textarea>

        <div class="botoes">
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </div>

    </form>

</section>