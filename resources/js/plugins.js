const plugins = ["FontAwesome"];

plugins.forEach(plugin => {
    require("@/plugins/" + plugin);
});
