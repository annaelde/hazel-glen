<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
		<xsl:for-each select="/events/event">
			<xsl:sort select="sortDate" order="ascending"/>
			<div class="content">
			<img class="event-image right" src="{image}" height="200" width="200" alt="{imageDesc}"/>
			<h2><xsl:value-of select="name" /></h2>
			<h3><xsl:value-of select="date" /> at <xsl:value-of select="time" /></h3>
			<p><xsl:value-of select="content" /></p>
			</div>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>