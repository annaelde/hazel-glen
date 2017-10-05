<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
		<xsl:for-each select="/events/event">
			<xsl:sort select="sortDate" order="ascending"/>
				<xsl:if test="position() = 1">
					<h3><a href="events.php"><xsl:value-of select="name" /></a></h3>
					<p><xsl:value-of select="snippet" /></p>
				</xsl:if>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>