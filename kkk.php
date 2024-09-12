<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Interativo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="guide-container">
        <h1>Guia Interativo</h1>
        <div class="step" id="step1">
            <h2>Passo 1</h2>
            <p>Este é o primeiro passo do guia. Clique na seta para o próximo passo.</p>
            <div class="navigation">
                <button class="nav-button" id="next1" onclick="nextStep()">&#8594;</button>
            </div>
        </div>
        <div class="step" id="step2" style="display: none;">
            <h2>Passo 2</h2>
            <p>Este é o segundo passo do guia. Clique na seta para o próximo passo ou na seta para trás para voltar.</p>
            <div class="navigation">
                <button class="nav-button" id="prev2" onclick="prevStep()">&#8592;</button>
                <button class="nav-button" id="next2" onclick="nextStep()">&#8594;</button>
            </div>
        </div>
        <div class="step" id="step3" style="display: none;">
            <h2>Passo 3</h2>
            <p>Este é o terceiro e último passo do guia. Clique na seta para concluir o guia.</p>
            <div class="navigation">
                <button class="nav-button" id="prev3" onclick="prevStep()">&#8592;</button>
                <button class="nav-button" id="finish" onclick="finishGuide()">&#10004;</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.guide-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.step {
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px; /* Aumenta o tamanho da seta */
    margin: 0 10px;
}

button:hover {
    background-color: #0056b3;
}

.navigation {
    text-align: center;
    margin-top: 20px;
}

.nav-button {
    font-size: 24px; /* Tamanho do ícone */
    background: transparent;
    border: none;
    color: #007bff;
    cursor: pointer;
}

.nav-button:hover {
    color: #0056b3;
}

</style>

<script>
    let currentStep = 1;

function showStep(step) {
    const allSteps = document.querySelectorAll('.step');
    allSteps.forEach(el => el.style.display = 'none');

    const stepElement = document.getElementById(`step${step}`);
    if (stepElement) {
        stepElement.style.display = 'block';
        currentStep = step;
    }
}

function nextStep() {
    showStep(currentStep + 1);
}

function prevStep() {
    showStep(currentStep - 1);
}

function finishGuide() {
    alert('Guia concluído!');
    showStep(1); // Opcional: Voltar para o primeiro passo ou esconder o guia
}

// Inicializa o guia mostrando o primeiro passo
showStep(currentStep);

</script>