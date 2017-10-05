<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="text" omit-xml-declaration="yes"/>
	<xsl:template match="/">
		<xsl:for-each select="/news/article">
			<xsl:sort select="sortDate" order="descending"/>
				<xsl:if test="position() = 1">
					<h3><a href="news.php"><xsl:value-of select="title" /></a></h3><p><xsl:value-of select="headline" /></p>
				</xsl:if>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>