module.exports = {
    proxy: "localhost:3000",  // Address and port of your PHP server
    files: ["**/*.php", "**/*.html", "**/*.css", "**/*.js"],  // Files to watch for changes
    injectChanges: true,
    watchOptions: {
        usePolling: true,
        interval: 500
    }
};
