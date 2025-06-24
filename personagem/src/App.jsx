import { useState } from "react";
import './App.css';
import arus from './assets/arus.jpg'; 


function App() {
  const [contador, setContador] = useState(0);

  const incrementar = () => setContador(contador + 1);
  const decrementar = () => setContador(contador - 1);
  const resetar = () => setContador(0);

  return (
    <div className="container">
      <h1>🎮 Ficha de Personagem</h1>
      <div className="personagem">
        <img src={arus} alt="Va'arus, o Guerreiro" className="imagem-personagem" />
        <h2>🧙 Nome: <span className="nome">Arus, o Guerreiro</span></h2>
        <p className="label">🔥 Pontos de Ação:</p>
        <div className="contador">{contador}</div>
        <div className="botoes">
          <button className="btn verde" onClick={incrementar}>+1</button>
          <button className="btn vermelho" onClick={decrementar}>-1</button>
          <button className="btn amarelo" onClick={resetar}>Resetar</button>
        </div>
      </div>
    </div>
  );
}

export default App;
