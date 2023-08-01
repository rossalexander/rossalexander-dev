<template>
    <Page title="Experience">
        <Tabs>
            <Tab active title="Farm21" role="Backend Developer">
                <List>
                    <ListItem>Collaborated within a Scrum framework as a Backend Developer to design and implement new platform features, diagnose and resolve software bugs, and proactively minimize technical debt for an agritech company dedicated to promoting sustainable resource use.</ListItem>
                </List>
            </Tab>
            <Tab active title="Viabold" role="Full Stack Developer">
                <List>
                    <ListItem>Development of custom ecommerce platforms for international organizations in the United States and Canada</ListItem>
                    <ListItem>Development of networking platforms and project websites for academics commissioned by universities in the Netherlands and Sweden</ListItem>
                    <ListItem>Database design and visualization project using Laravel, Vue.js, and D3.js for an interactive commodity trade database (Wageningen University)</ListItem>
                </List>
            </Tab>

            <Tab title="GSS Interactive" role="Frontend Developer">
                <List>
                    <ListItem>Development of multiple research project websites for various universities in the Netherlands (HTML, SCSS, Javascript)</ListItem>
                    <ListItem>Development of a corporate website for a consultancy firm based in the United States (HTML, SCSS, Javascript)</ListItem>
                    <ListItem>Website design and development for a travel advisor company based in the United States and the Netherlands (Google Maps API, HTML, SCSS, Javascript)</ListItem>
                </List>
            </Tab>

            <Tab title="Collision Studios" role="Audio Programmer">
                <List>
                    <ListItem>Audio programming for various Nintendo Wii games</ListItem>
                </List>
            </Tab>

            <Tab title="Isopod Labs" role="Audio Programmer">
                <List>
                    <ListItem>Audio programming for an Xbox360 game.</ListItem>
                </List>
            </Tab>
        </Tabs>
    </Page>
</template>

<script>
import List from "../Shared/List";
import ListItem from "../Shared/ListItem";
import Page from "../Shared/Page";
import Tabs from "../Shared/Tabs";
import Tab from "../Shared/Tab";

export default {
    name: "Experience",
    components: {
        List,
        ListItem,
        Page,
        Tabs,
        Tab,
    }
}
</script>

<style scoped>

</style>
