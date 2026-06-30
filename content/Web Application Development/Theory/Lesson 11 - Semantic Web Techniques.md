## What is Semantic Web?
Semantic Web is an extension to the World Wide Web. The purpose of the semantic web is to provide structure to the web and data in general. It emphasizes on representing a web of data instead of web of documents. It allows computers to intelligently search, combine and process the web content based on the meaning that the content has. Three main models of the semantic web are:

1. Building models
2. Computing with Knowledge
3. Exchanging Information

- **Building Models:** Model is a simplified version or description of certain aspects of the real-time entities. Model gathers information which is useful for the understanding of the particular domain.
- **Computing Knowledge:** Conclusions can be obtained from the knowledge present. **Example:** If two sentences are given as _'John is the son of Harry'_ and another sentence given is- _'Hary's father is Joey'_, then the knowledge that can be computed from it is - _'John is the grandson of Joey'_ Similarly, another example useful in the understanding of computing knowledge is- _'All A is B'_ and _'All B is C'_, then the conclusion that can be drawn from it is - _'All A are C'_ respectively.
- **Exchanging Information:** It is an important aspect. Various communication protocols have been implemented for the exchange of information like the TCP/IP, HTML, WWW. Web Services have also been used for the exchange of the data.

## The Technology

**Berners-Lee**, the inventor of the World Wide Web, proposed a “_layer cake_” model to represent the different layers of the SW. It includes the following layers (in order from lowest to highest):

1. **“Raw” data** can be expressed in Unicode text characters and identified through the IRI (Internationalized Resource Identifier), a system that allows the use of characters and formats suitable for languages other than English.
2. **XML** (Extensible Markup Language) is often used to structure information into machine-readable pages.
3. **RDF** provides a universal way to define entities, their properties, and the relationships between them.
4. **OWL** (Web Ontology Language) formalizes how to represent data provided by RDF together with RDFS (RDF Scheme), and works together with RIF (Rule Interchange Format) to describe the more difficult concepts to formalize.
5. **SPARQL** (SPARQL Protocol and RDF Query Language) is the protocol that, with the help of the previous tools, finds stored information.

There are other technologies used to further enhance the user experience, such as **encryption** to ensure and verify that “statements” come from trustworthy sources.

Last but not least, there is the **user interface** that allows us humans to use this technology through applications and other software.

![[sementicStack.png]]
## Use cases

There are several applications in which the SW can be useful. Here are the main ones:

- **SEO** (Search Engine Optimization), in this field, can help search engines provide more accurate results.
- **Data Management**, as it can manage data in a way that facilitates access.
- **Computational Biology**, in this sector, is useful for managing biological data and facilitating treatments and cures for diseases.
- **E-Commerce**, in this industry, can be used to provide detailed information about products and improve search.
- **“Digital Twins**”, semantic networks have been developed that allow physical entities to be connected to their digital representations.

## Resource Description Framework (RDF)

RDF is a standard model for data interchange on the Web. RDF has features that facilitate data merging even if the underlying schemas differ, and it specifically supports the evolution of schemas over time without requiring all the data consumers to be changed.

RDF extends the linking structure of the Web to use URIs to name the relationship between things as well as the two ends of the link (this is usually referred to as a “triple”). Using this simple model, it allows structured and semi-structured data to be mixed, exposed, and shared across different applications.

This linking structure forms a directed, labeled graph, where the edges represent the named link between two resources, represented by the graph nodes. This _graph view_ is the easiest possible mental model for RDF and is often used in easy-to-understand visual explanations.
![[rdf-graph.jpg]]
### RDF Schema
- The RDF Schema specifies the terminology used in RDF data models. RDF Schema includes simple modeling for expressing the information of RDF like classes, properties, hierarchies etc.
- A number of modeling primitives are used to organize RDF vocabularies in typed hierarchies.
- RDFS extends RDF to include “schema vocabulary”, e.g. Class, Property, type, subClassOf, subPropertyOf, range, domain etc.
![[rdfSchema.jpg]]
## Web Ontology Language (OWL)
The W3C Web Ontology Language (OWL) is a Semantic Web language designed to represent rich and complex knowledge about things, groups of things, and relations between things. OWL is a computational logic-based language such that knowledge expressed in OWL can be exploited by computer programs, e.g., to verify the consistency of that knowledge or to make implicit knowledge explicit. OWL documents, known as ontologies, can be published in the World Wide Web and may refer to or be referred from other OWL ontologies. OWL is part of the W3C’s Semantic Web technology stack, which includes [RDF](https://www.w3.org/2001/sw/wiki/RDF "RDF"), [RDFS](https://www.w3.org/2001/sw/wiki/RDFS "RDFS"), [SPARQL](https://www.w3.org/2001/sw/wiki/SPARQL "SPARQL"), etc.

The current version of OWL, also referred to as “OWL 2”, was developed by the [[W3C OWL Working Group](https://www.w3.org/2007/OWL/wiki/OWL_Working_Group)] (now closed) and published in 2009, with a Second Edition published in 2012. OWL 2 is an extension and revision of the 2004 version of OWL developed by the [[W3C Web Ontology Working Group](https://www.w3.org/2001/sw/WebOnt/)] (now closed) and published in 2004. The deliverables that make up the OWL 2 specification include a [Document Overview](https://www.w3.org/TR/2012/REC-owl2-overview-20121211/), which serves as an introduction to OWL 2, describes the relationship between OWL 1 and OWL 2, and provides an entry point to the remaining deliverables via a [Documentation Roadmap](https://www.w3.org/TR/2012/REC-owl2-overview-20121211/#Documentation_Roadmap).

## SPARQL Query Language for RDF
[RDF](https://www.w3.org/2001/sw/wiki/RDF "RDF") is a directed, labeled graph data format for representing information in the Web. This specification defines the syntax and semantics of the SPARQL query language for RDF. SPARQL can be used to express queries across diverse data sources, whether the data is stored natively as [RDF](https://www.w3.org/2001/sw/wiki/RDF "RDF") or viewed as [RDF](https://www.w3.org/2001/sw/wiki/RDF "RDF") via middleware. SPARQL contains capabilities for querying required and optional graph patterns along with their conjunctions and disjunctions. SPARQL also supports extensible value testing and constraining queries by source [RDF](https://www.w3.org/2001/sw/wiki/RDF "RDF") graph. The results of SPARQL queries can be results sets or [RDF](https://www.w3.org/2001/sw/wiki/RDF "RDF") graphs.

The current version of SPARQL is SPARQL 1.1, which supersedes the older version published in 2008. SPARQL 1.1 consists of 11 documents; The best is to look at the separate [SPARQL 1.1 Overview](https://www.w3.org/TR/sparql11-overview/) document, which lists all the documents and how they relate to one another.

## RDF Vocabulary Description Language 1.0: RDF Schema (RDFS)
RDFS is a general-purpose language for representing simple RDF vocabularies on the Web. Other vocabulary definition technologies, like [OWL](https://www.w3.org/2001/sw/wiki/OWL "OWL") or [SKOS](https://www.w3.org/2001/sw/wiki/SKOS "SKOS"), build on RDFS and provide language for defining structured, Web-based ontologies which enable richer integration and interoperability of data among descriptive communities.

## SWIRL

SWRL (==Semantic Web Rule Language==) is a rule-based language that combines **OWL ontologies** with **Horn-like rules**. It allows users to write "if-then" logic to infer new knowledge, compute values, and automate data validation based on existing concepts in a semantic web model.
Key Features of SWRL

- **Rule Structure:** Rules are composed of an **antecedent (body)** and a **consequent (head)** (e.g., Body → Head). If the conditions in the body are met, the conditions in the head are automatically inferred as true.
- **Expressivity:** It extends standard OWL by utilizing classes, properties, individuals, and built-in operators (like math, string manipulation, and dates) to establish advanced relationships.
- **Integration:** SWRL rules can be written using abstract syntax, XML-based RuleML, or RDF concrete syntax.

### Common Use Cases

- **Data Derivation:** Automatically calculating values (e.g., if an item has a _price_ and a _discount_, calculating the _final price_ using math built-ins).
- **Logical Inference:** Inferring new classifications (e.g., if a _Person_ has a _Child_, classifying them as a _Parent_).
- **Integrity Constraints:** Automatically detecting contradictions or missing information within a knowledge base. 

### How It’s Used

To apply SWRL rules, developers typically pair them with an ontology editor and a reasoning engine.

- **Editors:** **[Protégé](https://protege.stanford.edu/)** is the most popular ontology editor, which features a dedicated development environment (the SWRLTab) for editing and testing rules.
- **Reasoners:** Inference requires reasoners like **Pellet** or rule engines like **[Drools](https://www.drools.org/)** to execute the logic and extract new facts from the ontology.
- **Programming:** For Python developers, libraries such as **[Owlready2](https://owlready2.readthedocs.io/)** provide built-in capabilities to parse and run SWRL rules directly within your code.