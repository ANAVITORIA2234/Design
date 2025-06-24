function Home() {
  return (
    <main className="home-container">
      <header className="header">
        <h1> Clínica Vet Bem-Estar </h1>
        <p className="subtitle">Amor, cuidado e saúde para seu melhor amigo</p>
        <button className="btn-primary">Agende uma Consulta</button>
      </header>

      <section className="about">
        <h2>Sobre Nós</h2>
        <p>
          Com mais de 15 anos de experiência, a Clínica Vet Bem-Estar é dedicada a cuidar da saúde e bem-estar do seu pet com carinho e profissionalismo.
        </p>
      </section>

      <section className="services">
        <h2>Nossos Serviços</h2>
        <div className="services-grid">
          <div className="service-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="green"
              strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M9 12h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3>Consultas e Exames</h3>
            <p>Diagnóstico completo para manter seu pet saudável.</p>
          </div>

          <div className="service-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="green"
              strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M12 8v4l3 3" />
              <circle cx="12" cy="12" r="10" stroke="green" strokeWidth="2" fill="none" />
            </svg>
            <h3>Vacinação</h3>
            <p>Proteja seu animal com as vacinas essenciais.</p>
          </div>

          <div className="service-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="green"
              strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M5 12h14M12 5l7 7-7 7" />
            </svg>
            <h3>Cirurgias</h3>
            <p>Procedimentos seguros realizados por especialistas.</p>
          </div>

          <div className="service-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="green"
              strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
            <h3>Banho e Tosa</h3>
            <p>Deixe seu pet limpo, cheiroso e estiloso.</p>
          </div>

          <div className="service-card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon"
              fill="none"
              viewBox="0 0 24 24"
              stroke="green"
              strokeWidth={2}>
              <path strokeLinecap="round" strokeLinejoin="round" d="M18.364 5.636l-1.414 1.414M15 12h.01M7.05 16.95l-1.414-1.414M12 15h.01M16.95 7.05l-1.414-1.414M12 9h.01M12 21a9 9 0 100-18 9 9 0 000 18z" />
            </svg>
            <h3>Atendimento 24h</h3>
            <p>Emergências veterinárias a qualquer hora.</p>
          </div>
        </div>
      </section>

      <section className="contact">
        <h2>Fale Conosco</h2>
        <p><strong>Telefone:</strong> (11) 1234-5678</p>
        <p><strong>Email:</strong> contato@vetbemestar.com</p>
        <p><strong>Endereço:</strong> Rua das Flores, 123 - São Paulo, SP</p>
        <button className="btn-secondary">Enviar Mensagem</button>
      </section>

      <footer className="footer">
        <p>© 2025 Clínica Veterinária Bem-Estar - Todos os direitos reservados.</p>
      </footer>
    </main>
  )

}
export default Home;