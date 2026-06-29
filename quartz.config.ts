import { QuartzConfig } from "./quartz/cfg"
import * as Plugin from "./quartz/plugins"

/**
 * Quartz 4 Configuration
 *
 * See https://quartz.jzhao.xyz/configuration for more information.
 */
const config: QuartzConfig = {
  configuration: {
    pageTitle: "Kaveesh's Notes",
    pageTitleSuffix: "",
    enableSPA: true,
    enablePopovers: true,
    analytics: null,
    locale: "en-US",
    baseUrl: "KDIAS-JR7.github.io/FIS_Semester_04",
    ignorePatterns: [
      "private",
      "templates",
      ".obsidian",
      "Capstone Project/**",
      "Capstone P/**",
      "Tags",
      "PastedImages",
    ],
    defaultDateType: "modified",
    theme: {
      fontOrigin: "googleFonts",
      cdnCaching: true,
      typography: {
        header: "Inter",
        body: "Inter",
        code: "JetBrains Mono",
      },
      colors: {
        lightMode: {
          light: "#eff1f5",
          lightgray: "#ccd0da",
          gray: "#9ca0b0",
          darkgray: "#4c4f69",
          dark: "#5c5f77",
          secondary: "#1e66f5",
          tertiary: "#7287fd",
          highlight: "rgba(30, 102, 245, 0.15)",
          textHighlight: "rgba(223, 142, 29, 0.5)",
        },
        darkMode: {
          light: "#181825",
          lightgray: "#313244",
          gray: "#45475a",
          darkgray: "#cdd6f4",
          dark: "#bac2de",
          secondary: "#89b4fa",
          tertiary: "#b4befe",
          highlight: "rgba(137, 180, 250, 0.15)",
          textHighlight: "rgba(249, 226, 175, 0.5)",
        },
      },
    },
  },
  plugins: {
    transformers: [
      Plugin.FrontMatter(),
      Plugin.CreatedModifiedDate({
        priority: ["frontmatter", "git", "filesystem"],
      }),
      Plugin.SyntaxHighlighting({
        theme: {
          light: "github-light",
          dark: "github-dark",
        },
        keepBackground: false,
      }),
      Plugin.ObsidianFlavoredMarkdown({ enableInHtmlEmbed: false }),
      Plugin.GitHubFlavoredMarkdown(),
      Plugin.TableOfContents(),
      Plugin.CrawlLinks({ markdownLinkResolution: "shortest" }),
      Plugin.Description(),
      Plugin.Latex({ renderEngine: "katex" }),
    ],
    filters: [Plugin.RemoveDrafts()],
    emitters: [
      Plugin.AliasRedirects(),
      Plugin.ComponentResources(),
      Plugin.ContentPage(),
      Plugin.FolderPage(),
      Plugin.TagPage(),
      Plugin.ContentIndex({
        enableSiteMap: true,
        enableRSS: true,
      }),
      Plugin.Assets(),
      Plugin.Static(),
      Plugin.Favicon(),
      Plugin.NotFoundPage(),
      // Comment out CustomOgImages to speed up build time
      Plugin.CustomOgImages(),
    ],
  },
}

export default config
