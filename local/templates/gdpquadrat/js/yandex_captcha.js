class YandexInvisibleCaptcha {
    widgetId = false;
    siteKey = "";
    captchaInput;

    constructor(siteKey) {
        this.form;
        this.siteKey = siteKey;
        this.containerId = this.form?.name;
        // this.captchaInput =this.form.querySelector('[data-captcha]')
        this.render();

    }

    addHiddenContainer() {
        if (document.getElementById(this.form?.name) === undefined) {
            return
        }
        document.getElementById(this.form.name);
        let container = document.createElement('div');
        container.id = this.form.name;
        this.form.appendChild(container);
    }

    addBodyContainer() {
        let container = document.createElement('div');
        container.id = 'captchaYa';
        this.containerId = container.id;
        document.body.appendChild(container);
    }

    render() {
        if (window.smartCaptcha) {
            console.log(`init smartCaptcha`);
            this.addBodyContainer();

            this.widgetId = window.smartCaptcha.render(this.containerId, {
                sitekey: this.siteKey,
                invisible: true, // Сделать капчу невидимой
                callback: this.onSuccess.bind(this),
                // test:true,
                hideShield: true,
                'error-callback': this.onError.bind(this),
            });
            console.log(this.widgetId);
            return this.widgetId;
        } else {
            console.log('not init smartCaptcha scripts');
            setTimeout(() => {
                this.render()
            }, 1000);
        }

    }

    execute(form) {
        this.captchaInput = form.querySelector('[data-captcha]') ?? false;
        if (!this.captchaInput) {
            return;
        }
        this.form = form;
        window.smartCaptcha.execute(this.widgetId);
    }

    onSuccess(token) {
        console.log(this.captchaInput)
        this.captchaInput.value = token;
        this.form.submit();
        this.reset();

    }

    reset() {
        window.smartCaptcha.reset(this.widgetId);
    }

    onError() {
        console.error("Ошибка при проверке капчи");
        this.reset();
    }

}

