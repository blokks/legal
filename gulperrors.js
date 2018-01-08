var notify = require("gulp-notify"),
    util = require("gulp-util");

module.exports = function() {
    notify.onError({
        title: "Compile Error",
        message: "<%= error.message %>"
    }).apply(this, arguments);

    // util.beep();
    this.emit("end");
};
