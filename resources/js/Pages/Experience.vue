<template>
    <Page title="Experience">
        <div class="w-full h">
            <Tabs>
                <Tab active title="Viabold" role="Full Stack Developer">
                    <List>
                        <ListItem>Development of custom ecommerce platforms for international organizations in the
                            United States and Canada
                        </ListItem>
                        <ListItem>Database design and visualization projects for Universities in the Netherlands and
                            Sweden
                        </ListItem>
                        <ListItem>Development of various web projects for universities in the Netherlands</ListItem>
                    </List>
                </Tab>

                <Tab title="GSS Interactive" role="Frontend Developer">
                    <List>
                        <ListItem>Development (HTML, SCSS, Javascript) of multiple research project websites
                            for various universities in the Netherlands</ListItem>
                        <ListItem>Development of (HTML, SCSS, Javascript) for websites in the United States</ListItem>
                        <ListItem>Development of (Google Maps API, HTML, SCSS, Javascript) for a travel
                            advisor website</ListItem>
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
        </div>
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
