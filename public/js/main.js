document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll("form[data-form]");

    forms.forEach(form => {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();

            const login = form.querySelector("input[name='login']");
            const password = form.querySelector("input[name='password']");

            let hasError = false;

            // Проверка пустых полей и стилизация ошибок
            [login, password].forEach(input => {
                if (!input.value.trim()) {
                    input.style.border = "2px solid red";
                    hasError = true;
                } else {
                    input.style.border = "";
                }
            });

            if (hasError) return;

            const url = form.dataset.url;

            try {
                const response = await fetch(url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").content // Токен CSRF
                    },
                    body: JSON.stringify({
                        login: login.value.trim(),
                        password: password.value.trim()
                    })
                });

                if (response.ok) {
                    const result = await response.json();
                    alert(result.status); // Выводим статус
                } else {
                    console.error('Ошибка при отправке запроса:', response.status, response.statusText);
                    alert(`Ошибка на сервере: ${response.status} ${response.statusText}`);
                }
            } catch (error) {
                console.error('Ошибка при отправке запроса:', error);
                alert('Произошла ошибка при отправке данных на сервер.');
            }
        });
    });
});
