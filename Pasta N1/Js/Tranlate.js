    const translations = {
        en: {
            hello: 'Hello, World!',
            sample: 'This is some sample content in English.',
            buru: 'You are a dumb',
            UMI: 'I am a small entrepreneur creating content from rural areas of Portugal.....'

        },
        es: {
            hello: '¡Hola, Mundo!',
            sample: 'Este es un contenido de ejemplo en español.',
            buru: 'Eres un tonto',
            UMI: 'Soy un pequeño emprendedor que crea contenido en zonas rurales de Portugal.....'

        },
        fr: {
            hello: 'Bonjour le Monde!',
            sample: 'Ceci est un contenu d\'exemple en français.',
            buru: 'Tu es un idiot',
            UMI: 'Je suis un petit entrepreneur qui crée du contenu provenant des zones rurales du Portugal.....'
        }
        // Adicione mais traduções conforme necessário
    };

    // Função para traduzir o conteúdo
    function translateContent() {
        const selectedLanguage = document.getElementById("language").value;
        const translatedText = translations[selectedLanguage];

        // Atualize o conteúdo traduzido
        document.querySelectorAll('[data-i18n]').forEach(element => {
            const key = element.dataset.i18n;
            element.textContent = translatedText[key];
        });
    }

    // Evento para acionar a tradução quando o idioma é alterado
    document.getElementById("language").addEventListener("change", translateContent);

    // Inicialmente, execute a tradução para o idioma selecionado
    translateContent();
